@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard: Student who applied for certificate</div>

                    <div class="panel-body">
                        <a href="">Student Applied For Certificate</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th>Lastname</th>
                                <th>StudentId</th>
                                <th>Email</th>
                                <th>Course</th>
                                <td>Print</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $stu)
                            <tr>
                                <td>{{ $stu->first_name }}</td>
                                <td>{{ $stu->middle_name }}</td>
                                <td>{{ $stu->last_name }}</td>
                                <td>{{ $stu->student_id }}</td>
                                <td>{{ $stu->email }}</td>
                                <td>{{ $stu->name }}</td>
                                <td><a href="{{ route('student.pdf',array($stu->id)) }}">pdf</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
