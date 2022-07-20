<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Bookingdate;
use App\Models\Registersme;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookingdates = Bookingdate::all();
        $events = Event::paginate(10);
        return view('dashboards.mps.events.index', compact('events','bookingdates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboards.mps.events.create');
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
            'companyfullnamesme',
            'companyfullnamemp',
            'startdate',
            'enddate',
            'service',
           
        ]);

        //create a new register company to database
        Event::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('dashboards.mps.events.index')->with('success','Booking date successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('dashboards.mps.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboards.mps.events.edit', compact('bookingdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
         //redirect the data and display success message
         return redirect()->route('dashboards.mps.events.index')->with('success','Data deleted successfully');
    }

 
}
