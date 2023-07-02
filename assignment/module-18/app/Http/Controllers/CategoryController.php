<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return $posts;
    }
    public function latestPostWithCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $categories = $category->latestPost();

        return view('latestPost', compact('categories'));
    }
}
