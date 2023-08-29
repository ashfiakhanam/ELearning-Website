<?php

namespace App\Http\Controllers;

use App\Models\CourseCoordinators;
use Illuminate\Http\Request;

class CourseCoordinatorsController extends Controller
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

    public function customisecourse_coordinators()
    {
        $course_coordinators = CourseCoordinators::latest()->get();
		return view('course_coordinators.customisecourse_coordinators', compact('course_coordinators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course_coordinators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseCoordinators::create([
            'course_code' => request('course_code'),
            'course_coordinator' => request('course_coordinator'),
            'status' => request('status')
        ]);
        return redirect()->route('course_coordinators.customisecourse_coordinators');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCoordinators  $courseCoordinators
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCoordinators $courseCoordinators)
    {
        return view('course_coordinators.show', compact('courseCoordinators'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCoordinators  $courseCoordinators
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCoordinators $courseCoordinators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCoordinators  $courseCoordinators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCoordinators $courseCoordinators)
    {
        $courseCoordinators->course_code = request('course_code');
        $courseCoordinators->course_coordinator = request('course_coordinator');
        $courseCoordinators->status = request('status');
        $courseCoordinators->save();
        return redirect()->route('course_coordinators.customisecourse_coordinators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCoordinators  $courseCoordinators
     * @return \Illuminate\Http\Response
     */
    public function delete(CourseCoordinators $courseCoordinators)
    {
        return view('course_coordinators.delete', compact('courseCoordinators'));
    }
    
    public function destroy(CourseCoordinators $courseCoordinators)
    {
        $courseCoordinators->delete();
        return redirect()->route('course_coordinators.customisecourse_coordinators');
    }
}
