<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Layout;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{

    function home()
    {

        $posts = Post::orderBy('updated_at', 'desc')->get();
        $layouts = Layout::with('post')->get();

        // Filter layouts where layout equals 'box3'
        $box3 = Layout::with('post')->where('layout', 'box3')->get();
        $box1 = Layout::with('post')->where('layout', 'box1')->get();
        $box2 = Layout::with('post')->where('layout', 'box2')->get();
        $box4 = Layout::with('post')->where('layout', 'box4')->get();
        $box5 = Layout::with('post')->where('layout', 'box5')->get();
        $box6 = Layout::with('post')->where('layout', 'box6')->get();
        $box7 = Layout::with('post')->where('layout', 'box7')->get();


        //    5 latest posts
        // Retrieve the 5 latest posts
        $latests = Post::orderBy('created_at', 'desc')->take(5)->get();
        // return $latests;
        // $categories = Category::with('posts')->orderBy('created_at', 'desc')->take(5)->get(); 
        // $categories = Category::with('posts')->get();


        $categories = Category::all();

        // Iterate through categories to limit posts
        foreach ($categories as $category) {
            // Eager load all posts and then limit the collection to 5
            $category->posts = $category->posts()->orderBy('created_at', 'desc')->take(5)->get();
        }

        // return $categories;

        return view('frontend.index', compact('box1', 'box2', 'box3', 'box3', 'box3', 'box4', 'box5', 'box6', 'box7', 'latests', 'categories'));
    }

    function category($category)
    {
        // $categories = Category::with('posts')->where('title', $category)->firstOrFail();
        $categories = Category::with(['posts' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->where('title', $category)->firstOrFail();
        return view('frontend.category', compact('categories'));
    }
 
    public function post($id)
{
    // Find the post with the given ID
    $post = Post::find($id);
    
    // Check if the post exists
    if (!$post) {
        abort(404, 'Post not found.');
    }
    
    // Check if tags are not null and not empty
    if ($post->tags) {
        // Convert the tags from a hyphen-separated string to an array of tags
        $tagsArray = explode(' ', str_replace('-', ' ', $post->tags));

        // Start building a query to find posts based on the tags
        $posts = Post::where(function ($query) use ($tagsArray) {
            // Loop through each tag in the array
            foreach ($tagsArray as $tag) {
                // Add a condition to the query to find posts where the tags column contains the current tag
                $query->orWhere('tags', 'like', '%' . $tag . '%');
            }
        })
        // Add a condition to exclude the post with the same ID as the current post
        ->where('id', '!=', $id)
        // Order the results by created_at in descending order (latest posts first)
        ->orderBy('created_at', 'desc')
        // Execute the query and get the results
        ->get();
    } else {
        // If tags are null or empty, return an empty collection
        $posts = collect();
    }
    // return $posts;

    // Pass the current post and the related posts to the view
    return view('frontend.post', compact('post', 'posts'));
}

}
