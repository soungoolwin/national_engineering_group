<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('images', 'category')->get();
        $categories = Category::all();


        return Inertia::render('Projects', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
}
