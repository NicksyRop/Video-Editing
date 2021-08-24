<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserTest;
use App\Notifications\ProfileRejcted;
use App\Notifications\ProfileVerified;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use RealRashid\SweetAlert\Facades\Alert;

class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){


        $newcomers = User::where([
            ['duty','Freelancer'],
            ['t_submitted' , 1],
            ['p_submitted', 1],
            ['verified', null]

        ])->get();



        return view('admin.verification.index')->with('newcomers',$newcomers);



    }

    public function profile($id){

        $freelancer = User::find($id);

        $profile = UserProfile::where('user_id',$id)->first();
       // dd($profile);

        $usertest = UserTest::where('user_id',$id)->first();
        $test = Test::where('id',$usertest->test_id)->first();


        return view( 'admin.verification.profile')->with('freelancer',$freelancer)->with('profile',$profile)->with('usertest',$usertest)->with('test',$test)->with('user',$freelancer);
    }

    public function test($id){

        $user = User::find($id);


        $usertest = UserTest::where('user_id',$id)->first();
       // dd($usertest);

        $test = Test::where('id',$usertest->test_id)->first();



        return view('admin.verification.test')->with('usertest',$usertest)->with('test',$test)->with('user',$user);

    }


    public function cv($id){

        $user= User::find($id);

        return view('admin.verification.cv')->with('user',$user);
    }

    public function tax($id)
    {


        $user= User::find($id);



        return view('admin.verification.tax')->with('user',$user);
    }

    public function verifyprofile(Request $request ,$id){

     $freelancer = User::find($id);
     $value = $request->verified;

      if($value == 1){
        ;

        $freelancer->notify(new ProfileVerified());
        $freelancer->verified =$value;
        $freelancer->save();
        Alert::success('Success', 'Profile  Verified');

      }else if($value == 0){


        $freelancer->verified =$value;
        $freelancer->save();

        $freelancer->notify(new ProfileRejcted());
        Alert::success('Success', 'Profile  Verified');

      }




      return redirect()->route('verification');
    }

    public function testview($id){

        $test = UserTest::find($id);

        $user = User::find($id);



        return view('admin.verification.testresponse')->with('test',$test)->with('user',$user);


    }

    public function verifytest(Request $request ,$id){

        $freelancer = User::find($id);

        $value = $request->test_status;

        $freelancer->test_status =$value;
        $freelancer->save();

        $freelancer->notify(new ProfileVerified());
        Alert::success('Success', 'Profile  Verified');

        return redirect()->route('verification');
    }

    public function reject(Request $request ,$id){

        $status = $request->status;

        $freelancer = User::find($id);


        User::where('id',$id)->update([

            'status' => $status,
            'profile_status' => 1

            ]);

        $freelancer->notify(new ProfileRejcted());

        Alert::success('Success', 'Profile  rejectetd');

        return redirect()->route('verification');

    }

}

