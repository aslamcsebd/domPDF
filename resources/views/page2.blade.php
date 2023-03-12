@include('path')
@php    
    $faker = Faker\Factory::create();
@endphp

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
        </style>
    </head>
    <body class="container-fluid">
        <section>
            <div class="text-center">
                <img src="{{$path('/img/logo.jpg')}}" alt="Logo" height="80" width="80">                
                
                <h4 class="text-uppercase">THANTHANIA NURUN ALA NUR FAZIL MADRASAH, BOGURA</h4>    
                <b>Thanthania Bus Stand,Bogura</b>    
                <h3 class="text-uppercase" style="margin: 5px 0;">Tabulation Sheet of Half Yearly Examination 2022</h3>    
                <b>
                    <span>Class: 8</span>,&nbsp;
                    <span>Shift: Day</span>,&nbsp;
                    <span>Session: 2022</span>,&nbsp;
                    <span>Section: N/A</span>
                </b>
                <br>
                <b>Merit List Serial By GPA</b>                           
            </div>
            
            <br>

            <table class="table table-bordered text-center">
                <thead>
                    <th>ID</th>
                    <th>Roll</th>
                    <th>Merit List (Section)</th>
                    <th>Merit List (Class)</th>
                    <th>Name</th>
                    <th>Arabic</th>
                    <th>Arabic 2nd</th>
                    <th>Quran Mazid & Tajbid WR</th>
                    <th>Akaid & Fiqah WR</th>
                    <th>English</th>
                    <th>Bangla WR</th>
                    <th>Mathematics WR</th>
                    <th>Science WR</th>
                    <th>BD & Word Introduction WR</th>
                    <th>Agriculture WR</th>
                    <th>ICT</th>
                    <th>Physical Education</th>
                    <th>GPA</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Att.</th>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 3; $i++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{rand(1,50)}}</td>
                            <td>{{rand(1,10)}}</td>
                            <td>{{rand(1,10)}}</td>
                            <td>Karim {{$i}}</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>{{rand(40,100)}}({{rand(2,5)}})</td>
                            <td>4.75(891)</td>
                            <td>A</td>
                            <td>PASS</td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>

            <br>
            <h4>Summery</h4>
            <table class="table table-bordered text-center">
                <thead>
                    <th></th>
                    <th>Arabic</th>
                    <th>Arabic 2nd</th>
                    <th>Quran Mazid &Tajbid WR</th>
                    <th>Akaid & Fiqah WR</th>
                    <th>English</th>
                    <th>Bangla WR</th>
                    <th>Mathematics WR</th>
                    <th>Science WR</th>
                    <th>BD & Word Introduction WR</th>
                    <th>Agriculture WR</th>
                    <th>ICT</th>
                    <th>Physical Education</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    @php $grade = array("A+","A","A-","B","C", "D"); @endphp
                    @for($i = 0; $i <= 4; $i++)
                        <tr>
                            <td>{{$grade[$i]}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td>{{rand(40,80)}}</td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>  

            <style>                
                .col-md-3{border-top: 1px dashed black; margin-top: 30px; padding: 5px;}
                .sign .middle{margin: 30px 100px;}
            </style>
            <div class="row text-center sign">
                <span class="col-md-3">
                    <strong>Class Teacher</strong>
                </span>
                <span class="col-md-3 middle">
                    <strong>Vice Principal</strong>
                </span>
                <span class="col-md-3">
                    <strong>Principal</strong>
                </span>
            </div>
        </section>
    </body>
</html>
