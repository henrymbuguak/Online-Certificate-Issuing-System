@extends('layouts.app')

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.1/Chart.min.js"></script>
    <script src="{{ asset('js/stats.js') }}"></script>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard: Course Statistics</div>

                    <div class="panel-body">
                        <canvas id="bar-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart code -->
    <script src="{{ asset('js/start.js') }}"></script>

@endsection
