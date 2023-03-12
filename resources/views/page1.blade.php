@include('path')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <link href="{{$path('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>PDF Generator</title>
        <style>
            .table thead tr th, .table tbody tr td {text-align: center !important; vertical-align: middle !important;}
            .logo img, .logo strong {display: inline-block; vertical-align: middle;}
            .logo img, .logo span {display: inline-block; vertical-align: middle;}
            .sign{width: auto; float: right; border-top: 1px dashed black; margin-top: 30px;}
        </style>
    </head>
    <body class="container-fluid">
        <section>
            <div class="text-center logo">
                <span>
                    <img src="{{$path('/img/logo.jpg')}}" alt="Logo" height="80" width="80">
                </span>
                <strong>
                    <h3 class="text-uppercase">Ambag milestone school</h3>
                    <h5>
                        <span>ESTD: 2012</span>
                        &nbsp;
                        <span>EIIN: 137682</span>
                        <p>Gazipur Sadar, Gazipur</p>
                    </h5>
                    <h4 class="text-uppercase">Student class position list</h4>
                </strong>
            </div>

            <br>

            <div class="row text-center">
                <span class="col-md-3">
                    <strong>Class: Class Nine</strong>
                </span>
                <span class="col-md-3">
                    <strong>Group: Business Studies</strong>
                </span>
                <span class="col-md-3">
                    <strong>Session: 2017</strong>
                </span>
                <span class="col-md-3">
                    <strong>Semester: 1st Semester Exam</strong>
                </span>
            </div>

            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Class Position</th>
                        <th>Section Position</th>
                        <th>Roll</th>
                        <th width="25%">Student Info</th>
                        <th>Total Mark</th>
                        <th>Obtained</th>
                        <th>GPA</th>
                        <th>Grade</th>
                        <th>Model Test Marks</th>
                        <th>Percent Total</th>
                        <th>Atd Days</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 3; $i++)
                        <tr>
                            <td>5</td>
                            <td>5-A</td>
                            <td>56</td>                            
                            <td class="logo">
                                <img src="{{$path('/img/student.png')}}" alt="Profile pic" height="60" width="50">                            
                                <span class="text-uppercase">
                                    Md Ariful Istam
                                    <br>                            
                                    2017-09-039
                                </span>
                            </td>
                            <td>1050</td>
                            <td>487</td>
                            <td>0</td>
                            <td class="fw-bold">F</td>
                            <td>282</td>
                            <td>425.5</td>
                            <td>25</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            
            <div class="sign">
                <h4>Md. Samsul alam</h4>
                <p style="text-align: right;">Head master</p>           
            </div>
        </section>
    </body>
</html>
