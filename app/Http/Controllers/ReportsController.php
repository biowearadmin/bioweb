<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Input;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function craig()
    {
        //
        return view('reports.craig');
    }
     public function dean()
    {
        //
        return view('reports.dean');
    }
     public function latisha()
    {
        //
        return view('reports.latisha');
    }
     public function julia()
    {
        //
        return view('reports.julia');
    }
     public function david()
    {
        //
        return view('reports.david');
    }

    public function readECGFile(Request $request)
    {
        //
        $data = Excel::load($request->file('ECGFile'), function($reader) {})->get();
        $ecgData = [];
        $dates = [];
        if(!empty($data) && $data->count()){
            foreach ($data->toArray() as $key => $value) {
                //dd(trim($value['time']));
                $ecgData[] = [trim($value['hfb'])];  
                $dates[] = [trim($value['time'])];  
                //dd($dates);;         
            }
        }
        // dd($ecgData, $dates);   
         return \Response::json(['ecgData' => $ecgData, 'dates' => $dates]);
        //return view('reports.index', ['ecgData' => $ecgData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
