<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $types = Project::with('tecnologies', 'types');
        return response()->json([
            'projects' => $projects,
            'types' => $types,
            'success' => true,
        ]);
    }
}
