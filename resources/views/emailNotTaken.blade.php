<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Weird Press </title>

    {{--<!-- Fonts -->--}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/Admin_panel_/img/favicon.png" >
    {{--<!-- Styles -->--}}
    <style>
        html, body {
            background-color: #2A3F54;
            color: #ECF0F1;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #ECF0F1;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


<div class="flex-center position-ref full-height">

    <div class="row">
        <div style="margin: auto auto; text-align: center;">
            <img src="/404/images/confused.png" style="max-height: 153px;" >
            <br/><br/>
        </div>
    </div>
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@if (Auth::check())--}}
                {{--<a href="{{ url('/admin_panel') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ url('/login') }}">Login</a>--}}
                {{--<a href="{{ url('/register_custom') }}">Register</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endif--}}

        <div class="row">
            <div class="content">

                {{--<img src="/Admin_panel_/img/favicon.png" style="max-height: 193px; float: left; " >--}}

                <div class="title m-b-md" style="width: 770px; font-size: 45px;">
                    Ooops.. No page published with this email address
                </div>

                <div class="links" style="font-size: 20px; color: #fff;">

                </div>

            </div>
        </div>
        </div>

</body>
</html>
