<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectResponse;
use App\Models\User;
use App\Notifications\JobTaken;
use App\Notifications\ProjectSubmitted;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Emoji\Emoji;

class JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('freelancer');
    }


    public function index(){


        $usercat = Auth::user()->profile->category_id;
        $userlevel = Auth::user()->profile->level_id;


        $projects = Project::where([

            ['category_id',$usercat],
            ['level_id',$userlevel],
            ['taken',0],
             ['paid',1]
            ])->get();


        return view('freelancer.projects.index2')->with('projects',$projects);
    }

    public function take($id){

        date_default_timezone_set("Africa/Nairobi");

        $project = Project::where('id',$id)->first();

        $client = User::where('id',$project->user_id)->first();


        $freelancerId =Auth::user()->id;

        $time_taken = date("Y-m-d H:i:s");




        $end_time = date('Y-m-d H:i:s',strtotime('+24hour ',strtotime($time_taken)));


       $new =  Project::where('id',$id)->update([

            'taken' => 1 , 'freelancer_id' => $freelancerId ,'time_taken' => $time_taken ,'end_time' => $end_time

        ]);


        $client->notify(new JobTaken());


        Alert::success('Success', 'All the best');

        return redirect()->route('active');



    }


    public function cancel($id){


        $project = Project::where('id',$id)->first();


        $project->freelancer_id = null;

        $project->submitted = 0 ;

        $project->taken =0;

        $project->time_taken = null ;
        $project->end_time = null;

        $project->save();

        return redirect()->route('projects');


    }

    public function show($id){

        $project = Project::find($id);


        return view('freelancer.projects.show')->with('project',$project);


    }


    public function download($id){
        $file = Project::find($id)->file;

        return response()->download(storage_path('app/'.$file));
    }

    public function active(){


        $freelancer = Auth::user()->id;

        $projects = Project::where([

            ['freelancer_id',$freelancer],
            ['approved', null],
            ['taken',1],
            ['submitted',0]
            ])->get();

          //  dd($projects);




        return view('freelancer.projects.bidded')->with('projects',$projects);

    }

    public function submit(Request $request,$id){

        $project = Project::find($id);

        $client = User::where('id',$project->user_id)->first();



        $this->validate($request,[

            'file' => 'required|mimes:gif,mp4,mp3,zip',
        ]);

        $file= $request['file'];
        $filename= time().'.'.$file->getClientOriginalName();
        $file->move('responses',$filename);


        ProjectResponse::create([

            'project_id' => $id,
            'file' =>   $filename,

        ]);


        Project::where('id',$id)->update([ 'submitted' => 1]);

        $client->notify(new ProjectSubmitted($project->id));



        Alert::success('Success', 'Response submitted');

        return redirect()->route('pending');


    }


    public function pending(){

        $freelancer = Auth::user()->id;
        $projects = Project::where([

            ['freelancer_id',$freelancer],
            ['approved', null],
            ['taken',1],
            ['submitted',1]
            ])->get();

        return view('freelancer.projects.pending')->with('projects',$projects);
    }

    public function completed(){
        $freelancer = Auth::user()->id;
        $projects = Project::where([

            ['freelancer_id',$freelancer],
            ['approved',1],
            ['taken',1],
            ['submitted',1]
            ])->get();


        return view('freelancer.projects.completed')->with('projects',$projects);
    }

    public function rejected(){

        $projects = Project::where([

            ['freelancer_id',Auth::user()->id],
            ['submitted',1],
            ['taken',1],
            ['approved',0]

        ])->get();

        return view('freelancer.projects.rejected')->with('projects',$projects);
    }
}
