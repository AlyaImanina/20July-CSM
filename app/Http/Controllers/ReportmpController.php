<?php

namespace App\Http\Controllers;

use App\Models\Reportmp;
use Illuminate\Http\Request;

class ReportmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Reportmp::all();
        return view('dashboards.mps.reports.index', compact('data'));
        // return view('dashboards.mps.reports.index');
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
        $data=new Reportmp();

        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('reports', $filename);
        $data->file=$filename;
 
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
 
    
        return redirect('./mp/show');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reportmp  $reportmp
     * @return \Illuminate\Http\Response
     */
    public function show(Reportmp $reportmp)
    {
        $data=Reportmp::all();
        return view('dashboards.mps.reports.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reportmp  $reportmp
     * @return \Illuminate\Http\Response
     */
    public function edit(Reportmp $reportmp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reportmp  $reportmp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reportmp $reportmp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reportmp  $reportmp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reportmp $reportmp)
    {
        //
    }

    // public function uploadpage()
    // {
    //     return view('reports.index');
    // }

    public function download(Request $request,$file)
    {
       return response()->download(public_path('reports/'.$file));
    }

    public function view($id)
    {
       $data=Reportmp::find($id);
       return view('dashboards.mps.reports.view', compact('data'));
    }
}
