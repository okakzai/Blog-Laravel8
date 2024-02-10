<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('post', [
            'menu' => 'Artikel',
            'title' => 'Detail Artikel',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
