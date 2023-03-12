@include('path')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{$path('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>PDF Generator</title>
        <style>
            .table>thead>tr>th,
            .table>tbody>tr>td { padding: 5px; }
            .transcript .table>tbody>tr>td {
                text-align: left !important; vertical-align: middle !important; font-weight: bold;
            }
            .table>thead>tr>th, 
            .table>tbody>tr>td {
                text-align: center !important; vertical-align: middle !important; font-weight: bold;
            }
            .logo img, .logo strong {display: inline-block; vertical-align: middle;}
            fieldset {
                border: 1.5px solid green;
                border-left: none;
                border-right: none;
                /* padding: 0 1em 1em 1em !important; */
                margin: 5px 0 0em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                box-shadow:  0px 0px 2px 0px #000;
            }
            legend{
                width:inherit;
                font-size: 1em !important;
                font-weight: bold !important;
                text-align: center !important;
                border: 1px solid pink; 
                background-color: whitesmoke;
                border-radius: 12px;   
                padding: 0px 8px;
            }
        </style>
    </head>
    <body class="container-fluid">
        <section style="border:2px solid green; margin-top: 20px;">
            <div class="text-center logo">
                <span>
                    <img src="{{$path('/img/logo.jpg')}}" alt="Logo" height="80" width="80">
                </span>
                <strong>
                    <h3 class="text-uppercase">Ambag milestone school</h3>
                    <b>
                        <span>ESTD: 2012</span>&nbsp;
                        <span>EIIN: 137682</span>
                        <p>Gazipur Sadar, Gazipur</p>
                    </b>
                </strong>
            </div>

            <fieldset>
                <legend>
                    <h4>ACADEMIC TRANSCRIPT</h4>                   
                </legend>
                <table class="transcript">
                    <tr class="row">
                        <td class="col-md-9">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan="6" style="text-align: center !important;">
                                        <img src="{{$path('/img/student.png')}}" alt="Profile pic" height="160" width="140">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Name</td>
                                    <td>:</td>
                                    <td>MIRZA RAIAN MAHMUD WASI</td>
                                </tr>
                                <tr>
                                    <td>Student Id</td>
                                    <td>:</td>
                                    <td>2017-16-001 (Class Roll : 1)</td>
                                </tr>
                                <tr>
                                    <td>Father's Name</td>
                                    <td>:</td>
                                    <td>MIRJA HAYET MAHMUD</td>
                                </tr>
                                <tr>
                                    <td>Mother's Name</td>
                                    <td>:</td>
                                    <td>JESMIN</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>:</td>
                                    <td>01600000000</td>
                                </tr>
                            </table>
                        </td>
                        <td class="col-md-3">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Class</td>
                                    <td>:</td>
                                    <td>Four</td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td>:</td>
                                    <td>General</td>
                                </tr>
                                <tr>
                                    <td>Section</td>
                                    <td>:</td>
                                    <td>BOY's-A</td>
                                </tr>
                                <tr>
                                    <td>Session</td>
                                    <td>:</td>
                                    <td>2017</td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>:</td>
                                    <td>3rd Semester Exam</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <table class="table table-bordered marksheet">
                <thead>
                    <tr>
                        <th rowspan="2">SL</th>
                        <th rowspan="2">Subject Name</th>
                        <th rowspan="2">SUB CODE</th>
                        <th rowspan="2">Full Mark</th>
                        <th colspan="5">OBTAINED MARKS</th>
                        <th rowspan="2">Grand Total</th>
                        <th rowspan="2">GP</th>
                        <th rowspan="2">Grade</th>
                    </tr>
                    <tr>
                        <th>SUB</th>
                        <th>OBJ</th>
                        <th>PRC</th>
                        <th>SBA</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <style>
                    .buttom tr td{padding: 5px !important;}
                </style>
                <tbody class="buttom">
                    @php $sub = array("BANGLA 1ST", "BANGLA 2ND", "ENGLISH 1ST", "MATH"); @endphp
                    @for($i = 1; $i <= 3; $i++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$sub[$i]}}</td>
                            <td>{{rand(100,110)}}</td>
                            <td>100</td>
                            <td>{{rand(50,100)}}</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>{{rand(80,100)}}</td>
                            <td>{{rand(80,100)}}</td>
                            <td>5</td>
                            <td>A+</td>
                        </tr>
                    @endfor
                    
                    <tr>
                        <td colspan="3">
                            <b class="pull-right">FULL MARK :</b>
                        </td>
                        <td class="bg-info">800</td>
                        <td colspan="5">
                            <b class="pull-right text-danger">TOTAL MARK :</b>
                        </td>
                        <td class="bg-danger text-danger">755</td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            <b class="pull-right">Model Test Mark :</b>
                        </td>
                        <td>594</td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            <b class="pull-right">Total Mark - 90 % (679.5) + Model Test Mark - 10 % (59.4) :</b>
                        </td>
                        <td>738.9</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b class="pull-right">Position In Class :</b>
                        </td>
                        <td>1</td>
                        <td colspan="3">
                            <b class="pull-right">GPA :</b>
                        </td>
                        <td colspan="2" class="text-danger">5.00</td>
                        <td colspan="3">Total Subject Failed :</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b class="pull-right">Position In Section (BOY's-A) :</b>
                        </td>
                        <td>1</td>
                        <td colspan="3">
                            <b class="pull-right">Grade Letter :</b>
                        </td>
                        <td colspan="2" class="text-danger">A+</td>
                        <td colspan="3">Total Activities Days :</td>
                        <td>84</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b class="pull-right">Result Status :</b>
                        </td>
                        <td colspan="6">
                            <b>PASS</b>
                        </td>
                        <td colspan="3">Present Days :</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b class="pull-right">School Opinion :</b>
                        </td>
                        <td colspan="6">
                            <b>EXCELLENT RESULT</b>
                        </td>
                        <td colspan="3">Absent Days :</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            SELIM AHMMED
                            <br>
                            <small>Class Teacher</small>
                        </td>
                        <td colspan="6">
                            <p style="padding-top: 20px;">Guardian/Parents Signature</p>
                        </td>
                        <td colspan="4">
                            <b>MD. SAMSUL ALAM</b>
                            <br>
                            <small>Head Master</small>                    
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </body>
</html>
