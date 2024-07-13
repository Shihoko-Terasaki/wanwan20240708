<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::query();

        if ($request->filled('area')) {
            $query->where('area', 'like', '%' . $request->area . '%');
        }

        if ($request->filled('breed')) {
            $query->where('breed', 'like', '%' . $request->breed . '%');
        }

        if ($request->filled('date')) {
            $query->whereDate('event_date', $request->date);
        }

        $events = $query->paginate(10);

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
}

