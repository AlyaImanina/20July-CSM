<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registermp extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'othersagencies'
    ];
}
