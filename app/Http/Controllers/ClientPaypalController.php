<?php

namespace App\Http\Controllers;

use App\Models\ClientPaypal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientPaypalController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function index(){

        $history = ClientPaypal::where('user_id',Auth::user()->id)->get();

        return view('client.paypal.index')->with('histories',$history);
    }
}
