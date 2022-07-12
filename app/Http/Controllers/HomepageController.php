<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        return view('index', ['articles' => Article::getPublished()]);
    }
}
