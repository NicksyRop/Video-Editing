<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use Redirect,Response;
use Gate;
use RealRashid\SweetAlert\Facades\Alert;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $currencies = Currency::all();
            return view('admin.system_configurations.currencies.index', compact('currencies'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('admin.system_configurations.currencies.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currency = new Currency;
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        $currency->code = $request->code;
        $currency->exchange_rate = $request->exchange_rate;
        if ($currency->save()) {
            flash(__('Currency has been inserted successfully'))->success();
            return redirect()->route('currencies.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            $currency = Currency::findOrFail(decrypt($id));
            return view('admin.system_configurations.currencies.edit', compact('currency'));


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
        $currency = Currency::findOrFail($id);
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        $currency->code = $request->code;
        $currency->exchange_rate = $request->exchange_rate;
        if ($currency->save()) {
            Alert::success("Success","Currency has been updated successfully");
            return redirect()->route('currencies.index');
        }
        else{
            Alert::error("Ooops","Something went wrong");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $currency = Currency::findOrFail($id);
            if(Currency::destroy($id)){
                Alert::success('Sucess',"Currency has been deleted successfully");
                return redirect()->route('currencies.index');

        }

    }

    public function set_currency()
    {

            $currencies = Currency::all();
            return view('admin.system_configurations.currencies.set_currency', compact('currencies'));

    }
}
