<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    

    public function index(){

        return view('client.account.index');

    }



    public function store(Request $request){

        DB::table('accounts')->insert([

            'user_id' => Auth::user()->id,
            'amount' => 30,
        ]);
        
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
}
