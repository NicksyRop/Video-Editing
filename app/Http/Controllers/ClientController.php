<?php

namespace App\Http\Controllers;

use App\Models\FreelancerPay;
use App\Models\Project;
use App\Models\ProjectResponse;
use App\Models\UserRating;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('client');
    }
    public function index(){

        return view('client.dashboard');
    }


    public function viewSubmission($id){


        $response = ProjectResponse::where([

            'project_id'=> $id,
        ])->first();

       // dd($response);


        $project = Project::find($id);



        return view('client.projects.show')->with('response',$response)->with('project',$project);
    }


    public function pending(){

        $pending = Project::where([

            ['taken',1],
            ['user_id',Auth::user()->id],
            ['submitted',1],
            ['approved',null]
        ])->get();

        return view('client.projects.pending')->with('pendings',$pending);
    }


    public function approve(Request $request,$id){

        $value = $request->approved;

        $user_id = $request->user_id;

        $amount = $request->amount;



        if($value == 1){
        $user_wallet = Wallet::where('user_id',$request->user_id)->first();


            Project::where('id',$id)->update([

                'approved' => $value,
               ]);

               FreelancerPay::create([

                'user_id' => $user_id,
                'amount' => $amount,
                'project_id' => $request->project_id
            ]);


            if($user_wallet == null){

                    Wallet::create([

                        'user_id' => $user_id,
                        'total'  => $amount
                    ]);
            }else{

                $user_amount = Wallet::where('user_id',$user_id)->first()->total;
                $user_total = ($user_amount + $amount);

                $user_wallet->total = $user_total;

                $user_wallet->save();




            }
        }else{


            Project::where('id',$id)->update([

                'approved' => $value,
               ]);
        }



        return redirect()->back();


    }

    public function download($file){



        return response()->download(storage_path('app/'.$file));


    }

    public function rating(Request $request,$id){

        $project = Project::find($id);

        $freelancer = $project->freelancer_id;

      //  dd($request->all());

         UserRating::create([

            'rate' => $request->rating,
            'comment' => $request->comment,
            'freelancer_id' => $freelancer,
            'user_id'=>Auth::user()->id,
            'project_id' => $project->id


        ]);

        $project->rated = 1;
        $project->save();

        Alert::success('Success', 'Freelancer Rated');

        return redirect()->route('project.view',$project->id);




    }


    public function completed(){

        $products = Project::where([

            ['taken',1],
            ['user_id',Auth::user()->id],
            ['approved',1],
            ['submitted',1]

         ] )->get();

        return view('client.projects.completed')->with('completed',$products);

    }



}
