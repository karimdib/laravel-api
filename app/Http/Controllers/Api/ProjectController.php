<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type')->get();
        return response()->json([
            'projects' => $projects,
            'success' => true,
        ]);
    }
}
