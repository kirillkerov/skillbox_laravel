<?php

namespace App\Http\Controllers;

use App\Models\Article;

class Homepage extends Controller
{
    public function index()
    {
        return view('index', ['articles' => Article::all()]);
    }
}
