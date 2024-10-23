<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    // Display list of announcements
    public function index()
    {
        // $announcements = Announcement::all();
        // return view('dashboard.announcements.index', compact('announcements'));
        return view('dashboard.announcements.index');
    }

    // Show form to create new announcement
    public function create()
    {
        return view('dashboard.announcements.create');
    }

    /*
    // Save new announcement
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Announcement::create($request->all());
        return redirect()->route('dashboard.announcements.index')->with('success', 'Announcement created successfully.');
    }*/
}
