<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Request;

use App\Assignment;

class AssignmentsController extends Controller
{


    public function store($project_id)
    {

        // dd($project_id);

        $request = Request::all();

        // dd($request);

        $assignment_data = [
            'project_id' => $project_id,
            'assignment_title' => $request['assignment_title']
        ];

        // dd($assignment_data);


        Assignment::create($assignment_data);

        return back();
    }

}
