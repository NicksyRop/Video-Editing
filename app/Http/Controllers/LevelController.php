<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;





class LevelController extends Controller
{

    public function __construct(){

        $this->middleware('admin');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.levels.index')->with('levels',Level::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.levels.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'level' => 'required',
            'rating' => 'required',
            'commision' => 'required',
            'pay_per_minute' => 'required',

        ]);

        Level::create([

            'level' => $request->level,
            'rating' => $request->rating,
            'commision' => $request->commision,
            'pay_per_minute' => $request->pay_per_minute
        ]);

        Alert::success('Success','New Level Added');

        return redirect()->route('level.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {

        return view('admin.levels.show')->with('level1',$level);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('admin.levels.edit')->with('rate',$level);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Level $Level)
    {

        $this->validate(request(),[


        ]);

        $data = request()->all();


        $Level->level = $data['level'];
        $Level->rating = $data['rating'];
        $Level->commision = $data['commision'];
        $Level->pay_per_minute = $data['pay_per_minute'];

        $Level->save();

        Alert::success('Success', 'Level has been Updated');

        return redirect()->route('level.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Level= Level::find($id);

        $Level->delete();


       Alert::success('Success', 'Level Deleted successfully');

        return redirect()->route('level.index');

    }
}
