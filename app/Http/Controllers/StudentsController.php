<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
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

    public function customisestudents()
    {
        $students = Students::latest()->get();
		return view('students.customisestudents', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Students::create([
            'student_name' => request('course_code'),
            'course_code' => request('course_code'),
            'section_no' => request('section_no'),
            'status' => request('status')
        ]);
        return redirect()->route('students.customisestudents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        $students->student_name = request('student_name');
        $students->course_code = request('course_code');
        $students->section_no = request('section_no');
        $students->status = request('status');
        $students->save();
        return redirect()->route('students.customisestudents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function delete(Students $students)
    {
        return view('students.delete', compact('students'));
    }
    public function destroy(Students $students)
    {
        $students->delete();
        return redirect()->route('students.customisestudents');
    }
}
