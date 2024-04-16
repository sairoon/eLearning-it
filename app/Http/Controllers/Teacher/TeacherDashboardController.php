<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TeacherDashboardController extends Controller
{
    public function teacherDashboard(){
        return view('teacher.dashboard.dashboard');
    }
}
