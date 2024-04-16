<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teacher.index', [
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create', [
            'departments' => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::createTeacher($request);
        return back()->with('success', 'Teacher Added Successfully');
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
        return view('admin.teacher.edit', [
            'teacher' => Teacher::find($id),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/teachers')->with('success', 'Teacher info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::find($id)->delete();
        return back()->with('success', 'Teacher deleted successfully');
    }
}


