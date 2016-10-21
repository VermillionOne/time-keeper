<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;
use App\Project;
use Request;

class ProjectsController extends Controller
{
    public function index() {

    }

    public function store() {

        $user = Auth::user();

        $request = Request::all();

        // dd($user->id);

        $data = [
            'user_id' => $user->id,
            'project_title' => $request['project_title']
        ];

        // dd($data);

        Project::create($data);

        $projects = Project::all();

        // dd($projects);
        return back();
    }

    public function update() {

    }

    public function delete() {

    }
}
