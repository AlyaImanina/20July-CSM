<?php

namespace App\Http\Controllers;

use App\Models\Smeexcel;
use App\Models\Registersme;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Exports\SmeexcelsExport;
use App\Imports\SmeexcelsImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\RegistersmeController;

use function Ramsey\Uuid\v1;

class SmeexcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smeexcels = Smeexcel::paginate(20);
        return view('smeexcels.index',compact('smeexcels'));
    
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smeexcel $smeexcel
     * @return \Illuminate\Http\Response
     */
    public function show(Smeexcel $smeexcel)
    {
        //
        // return DB::table('smeexcel');
        return view('smeexcels.show', compact('smeexcel'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smeexcel $smeexcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Smeexcel $smeexcel)
    {
        return view('smeexcels.edit', compact('smeexcel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smeexcel $smeexcel)
    {
        //validate the input
        $request->validate([
            'datesubmitted' => 'required',
            'companyfullname' => 'required',
            'companyaddress' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'name' => 'required',
            'mobileno' => 'required',
            'email' => 'required',
            'geography' => 'required',
            'inwhichsectorsdoesyourcompanymainlyinvolved' => 'required',
            'couldyougiveindetailthesubsectorsofthebusiness' => 'required',
            'inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto' => 'required',
            'othersagencies' => 'required',
        ]);


        //create a new register companys
        $smeexcel->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('smeexcels.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smeexcel $smeexcel
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    public function destroy(Smeexcel $smeexcel)
    {
        //
        // $data=Smeexcel::findOrFail($id);
        // $data->delete();
        $smeexcel->delete();
        //  redirect the data and display success message
        return redirect()->route('smeexcels.index')
            ->with('danger', 'Data Deleted Successfully');
        // return redirect()->route('smeexcels.index')->with('danger','Data deleted successfully');
    }

    public function import(Request $req){
        Excel::import(new SmeexcelsImport,$req->file('smeexcel_file'));
        return back();
    }

    public function export() 
    {
        $smeexcels = Smeexcel::all();
        return Excel::download(new SmeexcelsExport($smeexcels), 'smeexcels.xlsx');
    }

    public function view()
    {
        return view('smeexcelsExport',[
            'smeexcels'=>$this->smeexcels
        ]);
    }

    public function accept(Request $request, $id)
        {
    
        $smeexcels = Smeexcel::find($id); //this will select the row with the given id
    
        //now save the data in the variables;
        $a = $smeexcels->datesubmitted;
        $b = $smeexcels->companyfullname;
        $c = $smeexcels->companyaddress;
        $d = $smeexcels->postcode;
        $e = $smeexcels->city;
        $f = $smeexcels->state;
        $g = $smeexcels->name;
        $h = $smeexcels->mobileno;
        $i = $smeexcels->email;
        $j = $smeexcels->geography;
        $k = $smeexcels->inwhichsectorsdoesyourcompanymainlyinvolved;
        $l = $smeexcels->couldyougiveindetailthesubsectorsofthebusiness;
        $m = $smeexcels->inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto;
        $n = $smeexcels->othersagencies;
        $o = $smeexcels->b1;
        $p = $smeexcels->b2;
        $q = $smeexcels->b3;
        $r = $smeexcels->b4;
        $s = $smeexcels->b5;
        $t = $smeexcels->b6;
        $u = $smeexcels->b7;
        $v = $smeexcels->c8;
        $w = $smeexcels->c9;
        $x = $smeexcels->c10;
        $y = $smeexcels->c11;
        $z = $smeexcels->c12;
        $aa = $smeexcels->c13;
        $bb = $smeexcels->c14;
        $cc = $smeexcels->c15;
        $dd = $smeexcels->c16;
        $ee = $smeexcels->c17;
        $ff = $smeexcels->c18;
        $gg = $smeexcels->c19;
        $hh = $smeexcels->c20;
        $ii = $smeexcels->c21;
        $jj = $smeexcels->c22;
        $kk = $smeexcels->c23;
        $ll = $smeexcels->d24;
        $mm = $smeexcels->d25;
        $nn = $smeexcels->d26;
        $oo = $smeexcels->d27;
        $pp = $smeexcels->othersagencies26;
        $qq = $smeexcels->d28;
        $rr = $smeexcels->d29;
        $ss = $smeexcels->d30;
        $tt = $smeexcels->d31;
        $uu = $smeexcels->finaltier;
        $vv = $smeexcels->earlymanualsmecategory;
        $ww = $smeexcels->earlystatus;
        $xx = $smeexcels->remarks;

    
    
        $registersmes = new Registersme();
        $registersmes->datesubmitted = $a;
        $registersmes->companyfullname = $b;
        $registersmes->companyaddress = $c;
        $registersmes->postcode = $d;
        $registersmes->city = $e;
        $registersmes->state = $f;
        $registersmes->name = $g;
        $registersmes->mobileno = $h;
        $registersmes->email = $i;
        $registersmes->geography = $j;
        $registersmes->inwhichsectorsdoesyourcompanymainlyinvolved = $k;
        $registersmes->couldyougiveindetailthesubsectorsofthebusiness = $l;
        $registersmes->inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto = $m;
        $registersmes->othersagencies = $n;
        $registersmes->b1 = $o;
        $registersmes->b2 = $p;
        $registersmes->b3 = $q;
        $registersmes->b4 = $r;
        $registersmes->b5 = $s;
        $registersmes->b6 = $t;
        $registersmes->b7 = $u;
        $registersmes->c8 = $v;
        $registersmes->c9 = $w;
        $registersmes->c10 = $x;
        $registersmes->c11 = $y;
        $registersmes->c12 = $z;
        $registersmes->c13 = $aa;
        $registersmes->c14 = $bb;
        $registersmes->c15 = $cc;
        $registersmes->c16 = $dd;
        $registersmes->c17 = $ee;
        $registersmes->c18 = $ff;
        $registersmes->c19 = $gg;
        $registersmes->c20 = $hh;
        $registersmes->c21 = $ii;
        $registersmes->c22 = $jj;
        $registersmes->c23 = $kk;
        $registersmes->d24 = $ll;
        $registersmes->d25 = $mm;
        $registersmes->d26 = $nn;
        $registersmes->d27 = $oo;
        $registersmes->othersagencies26 = $pp;
        $registersmes->d28 = $qq;
        $registersmes->d29 = $rr;
        $registersmes->d30 = $ss;
        $registersmes->d31 = $tt;
        $registersmes->finaltier = $uu;
        $registersmes->earlymanualsmecategory = $vv;
        $registersmes->earlystatus = $ww;
        $registersmes->remarks = $xx;

        $registersmes->save();
     /// IF YOU NEED TO REMOVE 1st TABLE VALUE    
        //  $smeexcels->delete();

        //then return to your view or whatever you want to do
        return redirect()->route('registersmes.index')->with('success','Data accepted successfully');
    
        }
            
}