<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'menu' => 'Home',
            'title' => 'Home',
            'posts' => Post::latest()->get(),
            'featured_home' => Post::where('featured_home', 1)->first(),
            'categories' => Category::all()
        ]);
    }
}
