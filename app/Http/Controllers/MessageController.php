<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MessageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return Inertia::render('Contact', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        Message::create($request->validate([
            'client_name' => ['required', 'max:50'],
            'phone' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'project_category' => ['required'],
            'message' => ['required']
        ]));
    }
}
