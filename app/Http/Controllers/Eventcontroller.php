<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class calendarController extends Controller
{

    public function index()
    {
        $events = Event::select('title', 'startTime AS start', 'endTime AS end')->get();
        return json_encode( compact('events')['events'] );
    }


    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'startTime' => 'required',
             'endTime' => 'required',

        ]);

        $calendar = calendar::create([
             'title' => $request->title,
             'startTime' => date($request->starttime),
             'endTime' => data($request->endtime)
        ]);

        return redirect('/calendar')
    }

    public function show($id)
    {
        $Calendar= Calendar::find($id);
        return view('calendars.show',compact('calendars'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
