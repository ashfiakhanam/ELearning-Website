<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcements::latest()->get();
		return view('announcements.index', compact('announcements'));
    }

    public function customiseannouncements()
    {
        $announcements = Announcements::latest()->get();
		return view('announcements.customiseannouncements', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Announcements::create([
            'date' => request('date'),
            'announcement' => request('announcement'),
        ]);
        return redirect()->route('announcements.customiseannouncements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function show(Announcements $announcements)
    {
        return view('announcements.show', compact('announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcements $announcements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcements $announcements)
    {
        $announcements->date = request('date');
        $announcements->announcement = request('announcement');
        $announcements->save();
        return redirect()->route('announcements.customiseannouncements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function delete(Announcements $announcements)
    {
        return view('announcements.delete', compact('announcements'));
    }
    
     public function destroy(Announcements $announcements)
    {
        $announcements->delete();
        return redirect()->route('announcements.customiseannouncements');
    }
}
