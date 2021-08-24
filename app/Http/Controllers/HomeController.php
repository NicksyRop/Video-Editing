<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Test;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){


        if(Auth::user()->duty == 'Freelancer'){

            return redirect()->route('profile_create');
        }else if(Auth::user()->duty == 'Client'){
            return redirect()->route('client.dashboard');
        }
    }

    public function freelancer_dashboard(){


        return view('freelancer.dashboard')->with('user',Auth::user());
    }


    public function create_profile(){

        return view('freelancer.profile.create')->with('categories',Category::all())->with('countries',Country::all());
    }

    public function store(Request $request){



       // dd($request->all());


        $this->validate($request,[
            'cv' =>  'required|mimes:pdf,doc,docx|max:2048',
            'kra' =>  'required|mimes:pdf,doc,docx|max:2048',
            'category' => 'required',
            'paypal_email' => 'required|email',

            'bio' => 'required|max:500',
            'front_image' => 'required|image|max:2048',
            'back_image' =>'required|image|max:2048',
            'country' => 'required',
            'back_image' => 'required',
            'front_image' => 'required'


        ]);


        $backimg = $request['back_image'];
        $backimgname = time().'.'.$backimg->getClientOriginalName();
        $backimg->move('files',$backimgname);

        $frontimg = $request['front_image'];
        $frontimgname = time().'.'.$frontimg->getClientOriginalName();
        $frontimg->move('files',$frontimgname);



        $kra = $request['kra'];
        $kraname= time().'.'.$kra->getClientOriginalName();
        $kra->move('files',$kraname);


        $cv = $request['cv'];
        $cvname = time().'.'.$cv->getClientOriginalName();
        $cv->move('files',$cvname);


      $profile =   UserProfile::create([

            'cv' => 'files/'.$cvname,
            'kra' => 'files/'.$kraname,
            'user_id' =>Auth::user()->id,
            'bio' => $request['bio'],
            'paypal_email' => $request['paypal_email'],
            'category_id' =>$request['category'],
            'country' =>$request['country'],
            'completed' => $request['completed'],
            'doctype' =>$request->doctype,
            'back_image' => $backimgname ,
            'front_image' => $frontimgname



        ]);

       // dd($profile);



        $id  = Auth::user()->id;
        User::where('id',$id)->update(['p_submitted' => 1]);


        Alert::success('Success', 'Profile Updated');

        return redirect()->route('freelancer.test');



    }

    public function test(){

        return view('freelancer.test.index')->with('user',Auth::user())->with('test1',Test::first());
    }


    public function submit(Request $request){

      // dd($request->all());

        $this->validate($request,[

            'file' => 'required|mimes:gif,mp4,mp3,zip',
        ]);

        $file= $request['file'];
        $filename= time().'.'.$file->getClientOriginalName();
        $file->move('tests',$filename);

        UserTest::create([

            'user_id' => $request['user_id'],
            'test_id' =>$request['test_id'],
            'file' =>   'tests/'.$filename,
        ]);


        $id  = Auth::user()->id;
        User::where('id',$id)->update(['t_submitted' => 1]);


        Alert::success('Success', 'Test Submited');

        return redirect()->route('welcome');





    }

    public function welcome(){

        if(Auth::user())
        return view('freelancer.index');
    }

    public function download($id){


        $file = Test::find($id)->file;
        return response()->download(storage_path('app/'.$file));



    }



}
