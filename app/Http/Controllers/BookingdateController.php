<?php

namespace App\Http\Controllers;

use App\Models\Registermp;
use App\Models\Bookingdate;
use App\Models\Registersme;
use Illuminate\Http\Request;
use App\Models\Pgpksprogramme;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookingdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $registersmes = Registersme::select('id','companyfullname')->get();
        // $registersmes = Registersme::all();
        $bookingdates = Bookingdate::latest()->paginate(10);
        return view('bookingdates.index', compact('bookingdates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function create()
    {

        $dropdownsme = Registersme::all();
        $dropdownmp = Registermp::all();
        return view('bookingdates.create', compact('dropdownsme', 'dropdownmp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requests
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'companyfullnamesme',
            'companyfullnamemp',
            'startdate',
            'enddate',
            'service',

        ]);


        //create a new register company to database
        Bookingdate::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('bookingdates.index')->with('success', 'Booking date successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookingdate  $bookingdate
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingdate $bookingdate)
    {
        $datas = Registersme::all();
        return view('bookingdates.show')->with('bookingdate', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookingdate  $bookingdate
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingdate $bookingdate)
    {
        return view('bookingdates.edit', compact('bookingdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookingdate  $bookingdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookingdate $bookingdate)
    {
        $request->validate([

            'companyfullnamesme',
            'companyfullnamemp',
            'startdate',
            'enddate',
            'service',

        ]);


        //create a new register company
        $bookingdate->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('bookingdates.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookingdate  $bookingdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingdate $bookingdate)
    {
        $bookingdate->delete();
        //redirect the data and display success message
        return redirect()->route('bookingdates.index')->with('success', 'Data deleted successfully');
    }

    public function accept(Request $request, $id)
    {

        $bookingdates = Bookingdate::find($id); //this will select the row with the given id

        //now save the data in the variables;
        $a = $bookingdates->companyfullnamesme;
        $b = $bookingdates->companyfullnamemp;
        $c = $bookingdates->finaltier;
        $d = $bookingdates->startdate;
        $e = $bookingdates->enddate;
        $f = $bookingdates->service;


        $pgpksprogrammes = new Pgpksprogramme();
        $pgpksprogrammes->companyfullnamesme = $a;
        $pgpksprogrammes->companyfullnamemp = $b;
        $pgpksprogrammes->finaltier = $c;
        $pgpksprogrammes->startdate = $d;
        $pgpksprogrammes->enddate = $e;
        $pgpksprogrammes->service = $f;
        $pgpksprogrammes->save();
        /// IF YOU NEED TO REMOVE 1st TABLE VALUE    
        //  $bookingdates->delete();

        //then return to your view or whatever you want to do
        return redirect()->route('pgpksprogrammes.index')->with('message', 'SME Accepted');
    }
}
