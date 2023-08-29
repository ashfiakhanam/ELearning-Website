<?php

namespace App\Http\Controllers;

use App\Models\CourseContents;
use Illuminate\Http\Request;

class CourseContentsController extends Controller
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
    public function customisecourse_contents()
    {
        $course_contents = CourseContents::latest()->get();
		return view('course_contents.customisecourse_contents', compact('course_contents'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course_contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseContents::create([
            'course_code' => request('course_code'),
            'section_no' => request('section_no'),
            'content_type' => request('content_type'),
            'content_details' => request('content_details'),
            'status' => request('status')
        ]);
        return redirect()->route('course_contents.customisecourse_contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseContents  $courseContents
     * @return \Illuminate\Http\Response
     */
    public function show(CourseContents $courseContents)
    {
        return view('course_contents.show', compact('courseContents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseContents  $courseContents
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseContents $courseContents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseContents  $courseContents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseContents $courseContents)
    {
        $courseContents->course_code = request('course_code');
        $courseContents->section_no = request('section_no');
        $courseContents->content_type = request('content_type');
        $courseContents->content_details = request('content_details');
        $courseContents->status = request('status');
        $courseContents->save();
        return redirect()->route('course_contents.customisecourse_contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseContents  $courseContents
     * @return \Illuminate\Http\Response
     */
    
    public function delete(CourseContents $courseContents)
    {
        return view('course_contents.delete', compact('courseContents'));
    }

     public function destroy(CourseContents $courseContents)
    {
        $courseContents->delete();
        return redirect()->route('course_contents.customisecourse_contents');
    }
}
