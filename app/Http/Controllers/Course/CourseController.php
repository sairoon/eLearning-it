<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teacher.course.index',[
            'courses' => Course::where('teacher_id', Session::get('teacher_id') )->get(), //only get authentic teacher course
        ]);
    }

    //Show the form for creating a new resource.

    public function create()
    {
        return view('teacher.course.create');
    }

    //Store a newly created resource in storage.

    public function store(Request $request)
    {
        Course::createCourse($request, );
        return back()->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show method';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('teacher.course.edit',[
            'course' => Course::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/courses')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::find($id)->delete();
        return back()->with('success', 'Course deleted successfully');
    }
}
