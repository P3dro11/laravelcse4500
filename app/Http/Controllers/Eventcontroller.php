<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::select('title', 'begin AS start', 'finish AS end')->get();
        return json_encode( compact('events')['events']);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'begin' => 'required',
            'finish' => 'required',
        ]);

        $events = Event::create([
            'title' => $request->title,
            'begin' => date($request->begin),
            'finish' => date($request->finish),
        ]);

        return redirect('/calendar');

    }

    public function show($id)
    {
        $events= Event::find($id);
        return view('events.show',compact('event'));
    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }

}
