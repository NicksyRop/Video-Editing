<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FreelancerController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


      return view('admin.freelancers.index')->with('freelancers',User::where( [

        ['duty' ,'Freelancer'],
        ['verified',1],

      ]
      )->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ratings = UserRating::all();
       // dd($ratings);

        return view('admin.reviews.index')->with('ratings',$ratings);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);

        //dd($user);

        $profile = UserProfile::where('user_id',$user->id)->first();
       // dd($profile);

        return view('admin.freelancers.show')->with('user',$user)->with('profile',$profile);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        Alert::success('Success',"User Deleted Successfully");

        return redirect()->route('freelancers.index');

    }


}
