<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Layout;
use App\Models\Post;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
     $layouts= Layout::with('post')->get();

      // Filter layouts where layout equals 'box3'
    $box3 = Layout::with('post')->where('layout', 'box3')->get();
    $box1 = Layout::with('post')->where('layout', 'box1')->get();
    $box2 = Layout::with('post')->where('layout', 'box2')->get();
    $box4 = Layout::with('post')->where('layout', 'box4')->get();
    $box5 = Layout::with('post')->where('layout', 'box5')->get();
    $box6 = Layout::with('post')->where('layout', 'box6')->get();
    $box7 = Layout::with('post')->where('layout', 'box7')->get();

        // return $box3;
        // return $layouts;
        return view('backend.layout.index', compact('posts', 'layouts', 'box1', 'box2', 'box3', 'box4', 'box5', 'box6', 'box7'));
    }

    public function activate($id, $div_id)
    {
        // Find the layout by post_id
        $layout = Layout::where('layout', $div_id)->first();

        if (!$layout) {
            // If not found, create a new layout
            $layout = new Layout();
            $layout->post_id = $id;
            $layout->layout = $div_id;
            // Save the layout
            $layout->save();

            return redirect()->back()->with('success', 'Layout created successfully.');
        } else {
            $layout->post_id = $id;  // Update the post_id if needed
            $layout->layout = $div_id;  // Update the layout column
    
            $layout->update();
            return redirect()->back()->with('success', 'Layout created successfully.');
        }
    }
}
