<?php

namespace App\Http\Controllers;

use App\Models\Bookingdate;
use App\Models\Pgpksprogramme;
use App\Models\Registersme;
use Illuminate\Http\Request;

class PgpksprogrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bookingdate::all();
        // $pgpksprogramme = Pgpksprogramme::latest()->paginate(20);

        // return view('$pgpksprogramme.index', compact('$pgpksprogramme'))->with(request()->input('page'));
        return view('pgpksprogrammes.index', compact('data'));
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
     * @param  \App\Models\Pgpksprogramme  $pgpksprogramme
     * @return \Illuminate\Http\Response
     */
    public function show(Pgpksprogramme $pgpksprogramme)
    {
        return view('pgpksprogrammes.show', compact('bookingdate'));
        // return view('pgpksprogrammes.show', compact('pgpksprogramme'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pgpksprogramme  $pgpksprogramme
     * @return \Illuminate\Http\Response
     */
    public function edit(Pgpksprogramme $pgpksprogramme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pgpksprogramme  $pgpksprogramme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pgpksprogramme $pgpksprogramme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pgpksprogramme  $pgpksprogramme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pgpksprogramme $pgpksprogramme)
    {
        //
    }


}
