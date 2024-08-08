<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at','desc')->get();
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->meta_description = $request->meta_description;
        $post->description = $request->description;
        $post->author = $request->author;
        $post->location = $request->location;
        $post->tags= Str::slug($request->tags);
        uploadImage($request, $post, "image"); 

        $post->slug = Str::slug($request->tags);
        $post->save();

        $post->categories()->attach($request->category_id);
        return redirect()->route('post.index')->with('success', 'Post created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories= Category::all();
        $post= Post::find($id);
        return view('backend.post.edit', compact('post', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->meta_description = $request->meta_description;
        $post->description = $request->description;
        $post->author = $request->author;
        $post->location = $request->location;
        $post->tags= Str::slug($request->tags);

        uploadImage($request, $post, "image"); 

        $post->slug = Str::slug($request->tags);
        $post->update();

        $post->categories()->sync($request->category_id);
        return redirect()->route('post.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post= Post::find($id);
        $post->delete();
if(file_exists($post->image)){
    unlink($post->image);
}
        return redirect()->route('post.index')->with('delete', 'Post deleted successfully.');

    }
}
