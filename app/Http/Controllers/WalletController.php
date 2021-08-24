<?php

namespace App\Http\Controllers;

use App\Models\FreelancerPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{

    public function __construct()
    {
        $this->middleware('freelancer');
    }

    public function earning(){

        $earnings = FreelancerPay::where('user_id',Auth::user()->id)->get();
        return view('freelancer.Earnings.index')->with('earnings',$earnings);
    }


}
