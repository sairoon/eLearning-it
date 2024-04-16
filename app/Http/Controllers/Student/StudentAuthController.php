<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentAuthController extends Controller
{
    private $student;

    public function login(){
        return view('frontEnd.auth.login');
    }

    public function checkLogin(Request $request){
        $this->student = Student::where('email', $request->email)->first();
        if ($this->student){
            if (password_verify($request->password, $this->student->password)){

                Session::put('student_id', $this->student->id);
                Session::put('student_name', $this->student->name);

                return redirect('/student/profile');
            } else{
                return back()->with('success', 'Invalid password.');
            }
        } else{
            return back()->with('success', 'Invalid email address.');
        }
    }

    public function register(){
        return view('frontEnd.auth.register');
    }
    public function checkRegister(Request $request){

        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|unique:students,email',
            'mobile'    => 'required',
            'password'  => 'required',
        ]);

        $this->student                      = new Student();
        $this->student->name                = $request->name;
        $this->student->email               = $request->email;
        $this->student->mobile              = $request->mobile;
        $this->student->password            = bcrypt($request->password);
        $this->student->address             = $request->address;
        $this->student->birth_certificate   = $request->birth_certificate;
        $this->student->date_of_birth       = $request->date_of_birth;
        $this->student->save();

        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);

        return redirect('/student/profile');
    }

    public function logout()
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }

    public function resetPass(){
        return view('frontEnd.auth.reset');
    }
}
