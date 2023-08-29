<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::latest()->get();
		return view('faculty.index', compact('faculties'));
    }

    public function customisecourses()
    {
        $faculties = Faculty::latest()->get();
		return view('faculty.customisefaculty', compact('faculties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Faculty::create([
            'faculty_initials' => request('faculty_initials'),
            'faculty_name' => request('faculty_name'),
            'faculty_designation' => request('faculty_designation'),
            'faculty_image' => request('faculty_image'),
            'status' => request('status')
        ]);
        return redirect()->route('faculty.customisefaculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        return view('faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $faculty->faculty_id = request('faculty_id');
        $faculty->faculty_initials = request('faculty_initials');
        $faculty->faculty_name = request('faculty_name');
        $faculty->faculty_designation = request('faculty_designation');
        $faculty->faculty_image = request('faculty_image');
        $faculty->status = request('status');
        $faculty->save();
        return redirect()->route('faculty.customisefaculty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */

    public function delete(Faculty $faculty)
    {
        return view('faculty.delete', compact('faculty'));
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('faculty.customisefaculty');
    }
}
