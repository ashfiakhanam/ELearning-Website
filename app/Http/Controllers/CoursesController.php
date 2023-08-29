<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::latest()->get();
		return view('courses.index', compact('courses'));
    }

    public function customisecourses()
    {
        $courses = Courses::latest()->get();
		return view('courses.customisecourses', compact('courses'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    public function delete(Courses $courses)
    {
        return view('courses.delete', compact('courses'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Courses::create([
            'course_code' => request('course_code'),
            'course_name' => request('course_name'),
            'course_details' => request('course_details'),
            'status' => request('status')
        ]);
        return redirect()->route('courses.customisecourses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        return view('courses.show', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        $courses->course_code = request('course_code');
        $courses->course_name = request('course_name');
        $courses->course_details = request('course_details');
        $courses->status = request('status');
        $courses->save();
        return redirect()->route('courses.customisecourses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        $courses->delete();
        return redirect()->route('courses.customisecourses');
    }
}
