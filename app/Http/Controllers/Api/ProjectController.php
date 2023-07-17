<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        // $projects = Project::all();
        $projects = Project::with("tipe", "technologies")->paginate(3);

        $response = [
            "result" => $projects,
        ];

        return response()->json($response);
    }
}
