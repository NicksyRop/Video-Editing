<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClientPaypal;
use App\Models\Level;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('client');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where([

            ['taken',0],
            ['user_id',Auth::user()->id],
            ['paid',1],
        ])->get();

        return view('client.projects.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('client.projects.create')->with('categories',Category::all())->with('levels',Level::all());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $request->validate([


        'file' => 'required|mimes:mp4',
        'instructions' => 'required',
        'category'=> 'required',
        'title' => 'required',
        'level' => 'required',

    ]);


    $project = new Project();
    $data = request()->all();
    //dd($data);


    //$file = $data['file'];
    // $name= time().'.'.$file->getClientOriginalName();
    // $file->move('projects',$name);
    // $project->file = $name;
    $project->instructions = $data['instructions'];
    $project->title = $data['title'];
    $project->user_id = Auth::user()->id;
    $project->file = $request->file->storeAs('projects', $request->file->getClientOriginalName());
    $project->category_id = $data['category'];
    $project->level_id = $data['level'];


    //dd($project);

    $project->save();



    //Alert::success('Success', 'Project Uploaded');

    return redirect()->route('pay',$project->id);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('client.projects.view')->with('project',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $project = Project::find($id);

        return view('client.projects.edit')->with('project',$project);

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
     $project = Project::find($id);

     ClientPaypal::create([

            'user_id' => Auth::user()->id,
            'amount'=> $request->amount,
            'paypal_id' => $request->payment,
            'project_id' => $project->id

        ]);



        $project = Project::find($id);
        $project->paid = 1;
        $project->duration = $request->duration;
        $project->amount = $request->amount;
        $project->freelancer_pay = $request->freelancer_pay;
        $project->save();

        //method to insert values to database ,,,,,paypal_id ,,amount ,,, time ...project id
        //$project->paypal_id = $request->payment;
        Alert::success('Success', 'Payment Successful');
        return redirect()->route('project.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $project = Project::find($id);

        $project->delete();



        return redirect()->route('project.index');

    }

    public function pay($id){

        $project = Project::find($id);

       // dd($project);


        $getID3 = new \getID3;

        $filename = $project->file;
        $file = storage_path('app/'.$filename);

        $ThisFileInfo = $getID3->analyze($file);
        $data = $this->convert_from_latin1_to_utf8_recursively($ThisFileInfo);

        $time =  $data['playtime_seconds'];
        $rate = Level::find($project->level_id)->pay_per_minute;
        $commission = 100 - (Level::find($project->level_id)->commision);

        $stringtime = gmdate("H:i:s",$time);

        $minutes = (int)($time/60 );

        $seconds = $time % 60 ;

        $amount =  round( (($time/60)* $rate ),2);
        $freelancer_amount = round((($amount * $commission)/100) ,2) ;


        return view('client.projects.amount')->with('minutes',$minutes)->with('seconds',$seconds)->with('amount',$amount)->with('id',$project->id)->with('timestring',$stringtime)->with('f_amount',$freelancer_amount);
    }

    /**
 * Encode array from latin1 to utf8 recursively
 * @param $dat
 * @return array|string
 */
   public static function convert_from_latin1_to_utf8_recursively($dat)
   {
      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

         return $dat;
      } else {
         return $dat;
      }
   }


}
