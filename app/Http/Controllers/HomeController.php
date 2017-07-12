<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('certificateApplication');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function certificateApplication(){
        $courses = DB::table('courses')->get();
        //dd($courses);
        return view('certificate',['courses'=>$courses]);
    }

    public function addCourse() {
        return view ('admin.course');
    }

    public function adminAddCourse(Request $request) {
        $availableStudenCourse = new Course();

        $availableStudenCourse->name=$request->name;
        $availableStudenCourse->save();

        return redirect('/admin/course/add')->with('status','Successfully submitted, Check your email!');
    }

    public function getAvailableCourse() {
        $courses = DB::table('courses')->get();
        return view('admin.offered',['courses'=>$courses]);
    }

    public function getStudent() {
        $student = DB::table('students')
            ->join('courses','students.course_id', '=' , 'courses.id')
            ->get();
        //dd($student);
        return view('admin.student',['student'=>$student]);
    }

    public function getCertificatePdf(){
        return view();
    }
}
