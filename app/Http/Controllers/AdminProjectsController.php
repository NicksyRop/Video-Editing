<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){

        $projects = Project::all();



        return view('admin.projects.index')->with('projects',Project::all());
    }

    public function running(){

        $projects = Project::where([

            ['paid',1],
            ['taken',1],
            ['submitted',0]

        ])->get();

      //  dd($projects);

        return view('admin.projects.running')->with('projects',$projects);
    }

    public function open(){
        $projects = Project::where([

            ['paid',1],
            ['taken',0],
            ['submitted',0]

        ])->get();

      //  dd($projects);

        return view('admin.projects.open')->with('projects',$projects);
    }

}
