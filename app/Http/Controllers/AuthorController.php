<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view('author', [
            'menu' => $author->name,
            'title' => $author->name,
            'author' => $author->name,
            'posts' => $author->posts,
            'categories' => Category::all()
        ]);
    }
}
