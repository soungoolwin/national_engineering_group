<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $categories = Category::all();
        $projects = Project::with('images', 'category')->get();
        return Inertia::render('Home', [
            'services' => $services,
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
}
