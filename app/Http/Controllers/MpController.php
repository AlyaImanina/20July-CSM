<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpController extends Controller
{
    function index()
    {
        return view('dashboards.mps.index');
    }
    function profile()
    {
        return view('dashboards.mps.profile');
    }
    function settings()
    {
        return view('dashboards.mps.settings');
    }
}
