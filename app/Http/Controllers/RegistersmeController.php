<?php

namespace App\Http\Controllers;

use App\Models\Registersme;
use Illuminate\Http\Request;
// use App\Models\Smeexcel;
use App\Http\Controllers\Smeexcel;

class RegistersmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registersmes = Registersme::latest()->paginate(50);

        return view('registersmes.index', compact('registersmes'))->with(request()->input('page'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registersmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'datesubmitted',
            'companyfullname',
            'companyaddress',
            'postcode',
            'city',
            'state',
            'name',
            'mobileno',
            'email',
            'geography',
            'inwhichsectorsdoesyourcompanymainlyinvolved',
            'couldyougiveindetailthesubsectorsofthebusiness',
            'inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto',
            'othersagencies',
            'b1',
            'b2',
            'b3',
            'b4',
            'b5',
            'b6',
            'b7',
            'c8',
            'c9',
            'c10',
            'c11',
            'c12',
            'c13',
            'c14',
            'c15',
            'c16',
            'c17',
            'c18',
            'c19',
            'c20',
            'c21',
            'c22',
            'c23',
            'd24',
            'd25',
            'd26',
            'd27',
            'othersagencies26',
            'd28',
            'd29',
            'd30',
            'd31',
            'finaltier',
            'earlymanualsmecategory',
            'earlystatus',
            'remarks',
        ]);


        //create a new register company to database
        Registersme::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('registersmes.index')->with('success','Register SME Company created successfull');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registersme  $registersme
     * @return \Illuminate\Http\Response
     */
    public function show(Registersme $registersme)
    {
        return view('registersmes.show', compact('registersme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registersme  $registersme
     * @return \Illuminate\Http\Response
     */
    public function edit(Registersme $registersme)
    {
        return view('registersmes.edit', compact('registersme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registersme  $registersme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registersme $registersme)
    {
        //validate the input
        $request->validate([
            'datesubmitted',
            'companyfullname',
            'companyaddress',
            'postcode',
            'city',
            'state',
            'name',
            'mobileno',
            'email',
            'finaltier'
        ]);


        //create a new register company
        $registersme->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('registersmes.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registersme  $registersme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registersme $registersme)
    {
        //delete the company details
       $registersme->delete();

       //redirect the user and display success message
       return redirect()->route('registersmes.index')->with('danger','Data Deleted Successfully');
    }

}
