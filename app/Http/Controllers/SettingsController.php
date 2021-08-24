<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function calender(){

        return view('admin.app.calender');
    }

    public function index(){

        return view('admin.app.setting');
    }
}
