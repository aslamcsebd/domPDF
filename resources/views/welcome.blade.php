@php
    $path = "url";
@endphp

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>PDF Generator</title>
        <style>
            .nav.navbar-nav {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            @media (min-width: 768px) {
                .navbar-nav {
                    float: none;
                }
            }
            .navbar-default .navbar-nav>.active>a {
                color: #555;
                background-color: #e7e7e7;
            }

        </style>
    </head>

    <body class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{Url('/')}}"">Page 1</a>
                    </li>
                    <li>
                        <a href="{{Url('/page', '2')}}">Page 2</a>
                    </li>
                    <li>
                        <a href="{{Url('/page', '3')}}">Page 3</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav" style="float: right !important;">
                    <li class="active">
                        <a href="{{Url('/print', '1')}}"">Print page 1</a>
                    </li>
                    <li>
                        <a href="{{Url('/print', '2')}}">Print page 2</a>
                    </li>
                    <li>
                        <a href="{{Url('/print', '3')}}">Print page 3</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            @if(isset($page))
                @include($page);
            @else
                @include('page1');
            @endif
        </section>
    </body>
</html>
