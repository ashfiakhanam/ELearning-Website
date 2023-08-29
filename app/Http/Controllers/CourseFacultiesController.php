<?php

namespace App\Http\Controllers;

use App\Models\CourseFaculties;
use Illuminate\Http\Request;

class CourseFacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function customisecourse_faculties()
    {
        $course_faculties = CourseFaculties::latest()->get();
		return view('course_faculties.customisecourse_faculties', compact('course_faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course_faculties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create([
            'course_code' => request('course_code'),
            'section_no' => request('section_no'),
            'course_faculty' => request('course_faculty'),
            'status' => request('status')
        ]);
        return redirect()->route('course_faculties.customisecourse_faculties');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseFaculties  $courseFaculties
     * @return \Illuminate\Http\Response
     */
    public function show(CourseFaculties $courseFaculties)
    {
        return view('course_faculties.show', compact('courseFaculties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseFaculties  $courseFaculties
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseFaculties $courseFaculties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseFaculties  $courseFaculties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseFaculties $courseFaculties)
    {
        $courseFaculties->course_code = request('course_code');
        $courseFaculties->section_no = request('section_no');
        $courseFaculties->course_faculty = request('course_faculty');
        $courseFaculties->status = request('status');
        $courseFaculties->save();
        return redirect()->route('course_faculties.customisecourse_faculties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseFaculties  $courseFaculties
     * @return \Illuminate\Http\Response
     */
    public function delete(CourseFaculties $courseFaculties)
    {
        return view('course_faculties.delete', compact('courseFaculties'));
    }
    public function destroy(CourseFaculties $courseFaculties)
    {
        $courseFaculties->delete();
        return redirect()->route('course_faculties.customisecourse_faculties');
    }
}
