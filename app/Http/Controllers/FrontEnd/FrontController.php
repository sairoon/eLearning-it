<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Course;

class FrontController extends Controller
{
    public function home(){
        return view('frontEnd.home.home',[
            'departments' => Department::where('status', 1)->get(),
            'teachers' => Teacher::all(),
//            'teachers' => Teacher::find(),
            'courses' => Course::where('status' , 1)->get(),
        ]);
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function courses($id){
        $this->teachers = Teacher::where('department_id', $id)->first();
        $this->course = Course::where('teacher_id',  $this->teachers->id)->where('status', 1)->get();
        $this->department = Department::findOrFail( $id);

        return view('frontEnd.courses.course',[
            'departments' =>  $this->department,
            'teachers' =>  $this->teachers,
            'courses' => $this->course,
        ]);
    }
    public function coursesDetail($id){
        $this->course = Course::find($id);

        $this->teacher = Teacher::find( $this->course->teacher_id );

        $this->dptm = Department::find( $this->teacher->department_id);
        return view('frontEnd.courses.course-detail',[

            'courses' =>  $this->course,
            'teachers' =>  $this->teacher,
            'departments' =>  $this->dptm,

//            'courses' => Course::all(),
        ]);
    }
    public function contactUs(){
        return view('frontEnd.contact.contact-us');
    }

}
