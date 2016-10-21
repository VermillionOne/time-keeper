<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Time;
use Request;

class TimesController extends Controller
{

    public function store($assignment_id)
    {

        // dd($project_id);

        $request = Request::all();
        // dd($request);

        $time_data = [
            'start_time' => $request['start_time'],
            'assignment_id' => $assignment_id,
            'end_time' => $request['end_time'],
            'elapsed_time' => "12:12"
        ];

        // dd($assignment_data);

        Time::create($time_data);

        return back();
    }
}
