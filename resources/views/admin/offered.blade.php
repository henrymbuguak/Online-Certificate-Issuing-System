@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard: Courses Offerred</div>

                    <div class="panel-body">
                        <table>
                            <tr>
                                <th style="text-align: center">Number</th>
                                <th style="text-align: center">Name of The Course</th>
                            </tr>
                            @foreach($courses as $course)
                                <tr>
                                    <td style="text-align: center"> {{ $loop->iteration}} </td>
                                    <td style="text-align: center"> {{ $course->name}} </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
