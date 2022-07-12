<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ['articles' => Article::all()]);
    }
}
