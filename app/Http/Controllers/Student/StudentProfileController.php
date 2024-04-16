<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class StudentProfileController extends Controller
{
    public function profile(){
        return view('frontEnd.student.profile');
    }
}
