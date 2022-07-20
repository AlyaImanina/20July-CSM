<?php

namespace App\Http\Controllers;

use App\Models\ReportAdmin;
use App\Models\Reportmp;
use Illuminate\Http\Request;

class ReportadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload = Reportmp::all();
        return view('reportadmins.index', compact('upload'));
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
     * @param  \App\Models\ReportAdmin  $reportAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ReportAdmin $reportAdmin)
    {
        // $data=Reportadmin::all();
        // return view('reportadmins.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportAdmin  $reportAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportAdmin $reportAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportAdmin  $reportAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportAdmin $reportAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportAdmin  $reportAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportAdmin $reportAdmin)
    {
        //
    }

    public function download(Request $request,$file)
    {
       return response()->download(public_path('reports/'.$file));
    }

    public function view($id)
    {
       $data=Reportmp::find($id);
       return view('reportadmins.view', compact('data'));
    }
}
