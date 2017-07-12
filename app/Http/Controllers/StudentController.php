<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function getCertificateApplication(Request $request) {
        $certificateApplication = new Student();

        $certificateApplication->first_name=$request->first_name;
        $certificateApplication->last_name=$request->last_name;
        $certificateApplication->middle_name=$request->middle_name;
        $certificateApplication->email=$request->email;
        $certificateApplication->student_id=$request->student_id;
        $certificateApplication->course_id=$request->course_id;
        $certificateApplication->save();


        return redirect('/')->with('status','Application Submitted Successfully');
    }
}
