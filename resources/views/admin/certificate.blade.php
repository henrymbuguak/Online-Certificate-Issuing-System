<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Certificate Issuing System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th, td {
            border: 1px solid #7FDBFF;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .footer {
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 50px;
            background-color: #6600CC;
        }
        .noborders td {
            border:0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <table cellpadding="0">
            <tr>
                <td>
                    <p>
                        Arifu<br>
                        Nairobi,<br>
                        Kenya.
                    </p>
                </td>
                <td>
                    <p style="text-align: center; font-size: 17px; color: #0083ff">Missions</p>
                    <p style="text-align: center; font-size: 17px;">Online Certificate Issuing System</p>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">

        <h3 style="text-align: center; color: #0083ff">Award of Excellence</h3>
        <h3 style="text-align: center; color: #0083ff">To</h3>
        @foreach($students as $student)
            <p><strong>Name:</strong> {{ $student->first_name}} {{ $student->middle_name}} {{ $student->last_name }}</p><br>
            <p><strong>Faculty:</strong> Online Certificate Issuing System</p>
            <p><strong>Course:</strong> {{ $student->name }} </p>
            <p><strong>Academic Year:</strong> 2017/2018</p>
            <p><strong>Registration No:</strong> {{ $student->student_id }}</p>
            <p><strong>Date Issued:</strong> <?php echo date("M, d, Y"); ?> </p>
        @endforeach
    </div>
</div>

<div class="container">
    <div class="row"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p style="text-align: center">Copyright &copy; <?php echo date("Y"); ?> Online Certificate Issuing System</p>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
</body>
</html>