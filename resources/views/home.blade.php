@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <a href="{{ route('add.course') }}">Add Course</a><br>
                    <a href="{{ route('offered.course') }}">View the Course Offered</a><br>
                    <a href="{{ route('student.certificate') }}">Student Applied For Certificate</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
