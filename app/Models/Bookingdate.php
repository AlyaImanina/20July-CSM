<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingdate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'companyfullnamesme',
        'finaltier',
        'companyfullnamemp',
        'startdate',
        'enddate',
        'service',
        // 'actualstartdate',
        // 'actualenddate',
        // 'status',
        // 'remark'

    ];
    // protected $hidden = [
    //     'actualstartdate',
    //     'actualenddate',
    //     'status',
    //     'remark'
    // ];
}
