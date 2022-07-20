<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registersme extends Model
{
    use HasFactory;

    protected $fillable = [
                'id',
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
                'remarks'
    ];
}
