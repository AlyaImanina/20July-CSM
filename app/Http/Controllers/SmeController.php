<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmeController extends Controller
{
    function index()
    {
        return view('dashboards.smes.index');
    }
    function profile()
    {
        return view('dashboards.smes.profile');
    }
    function settings()
    {
        return view('dashboards.smes.settings');
    }
}
