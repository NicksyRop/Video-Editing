<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rating;
use App\Models\Specialization;
use App\Models\Test;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestsController extends Controller
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
    public function index()
    {

        $tests = Test::all();


        return view('admin.tests.index')->with('tests',Test::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[

            'file' => 'required|mimes:mp4',
            'instructions' => 'required',
            'category'=> 'required'
        ]);

      //  dd($request->all());


        $test = new Test();
        $data = request()->all();

        $test->title = $data['title'];
        $test->instructions = $data['instructions'];
        $test->file = $request->file->storeAs('Test', $request->file->getClientOriginalName());
        $test->category_id = $data['category'];


        $test->save();


            Alert::success('Success', 'Test updated successfully');

            return redirect()->route('tests.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)

    {
       // dd($test);

        return view('admin.tests.show')->with('test1',$test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test,Request $request)
    {


        return view('admin.tests.edit')->with('tests',$test)->with('categories',Category::all());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Test $test)
    {

        $this->validate(request(),[

            'file' => 'required|mimes:mp4',
            'instructions' => 'required',
            'category'=> 'required'
        ]);



        $data = request()->all();

        $test->file = $request->file->storeAs('Test', $request->file->getClientOriginalName());
        $test->instructions = $data['instructions'];
        $test->category_id = $data['category'];


        $test->save();


            Alert::success('Success', 'Test updated successfully');

            return redirect()->route('tests.index');



    }

    public function download($file){


        $path = asset('files/'.$file);


        return response()->download($path);


       // return response()->download(public_path('files/'.$file));
    }

    public function destroy(Test $test){

        $test->delete();


        Alert::success('Success', 'Test deleted successfully');

        return redirect()->route('tests.index');


    }
}
