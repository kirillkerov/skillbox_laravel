<?php

namespace App\Http\Controllers;

use App\Models\Message;

class AdminController extends Controller
{
    public function feedback()
    {
        return view('admin.feedback', ['messages' => Message::getOrderedDesc()]);
    }
}
