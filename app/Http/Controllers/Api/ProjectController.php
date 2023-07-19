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
            "results" => $projects,
            "status" => true,
        ];

        return response()->json($response);
    }

    public function show($id){
        $project = Project::with("tipe", "technologies")->find($id);

        $response = [
            "result" => $project,
            "status" => true,
        ];

        return response()->json($response);
    }
}
