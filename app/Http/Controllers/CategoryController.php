<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('category', [
            'menu' => $category->name,
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
            'categories' => Category::all()
        ]);
    }
}
