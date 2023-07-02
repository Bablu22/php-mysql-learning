<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        $allPosts = Post::all();

        return view('posts', compact('posts'));
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return "Post with ID $id has been deleted.";
    }
}
