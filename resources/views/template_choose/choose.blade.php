@extends('admin_panel_DIR.admin_panel_view')


@section('content')

    <div class="" style="max-width: 990px;" id="main_display">


        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Lonely - </title>

            <!-- CSS -->
            <link href="/lonely/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="/lonely/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="/lonely/css/nivo-lightbox.css" rel="stylesheet" />
            <link href="/lonely/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
            <link href="/lonely/css/owl.carousel.css" rel="stylesheet" media="screen" />
            <link href="/lonely/css/owl.theme.css" rel="stylesheet" media="screen" />
            <link href="/lonely/css/style.css" rel="stylesheet">
            <link href="/lonely/color/default.css" rel="stylesheet">



            <style>

                .container
                {
                    width:990px;
                }

            </style>
        </head>

        <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Preloader -->
        <div id="preloader">
            <div id="load"></div>
        </div>

        <div class="container">


            <h2 style="font-size: 28px;"> Welcome to weird press where you can create your own personal pages </h2>

            <h3> choose template </h3>

            <hr/>
            <h4> Material X</h4>

            <div class="row">

                <div class="col-sm-8" >

                    <img src="/choose_template/img/materilizeX.png">

                </div>

                <div class="col-sm-3">
                    <p>
                        MaterialX is a material design Resume and Portfolio Template based on Twitter Bootstrap and Materialize, developed for professional to display their Profile, Resume etc. Easily customizable and fully responsive for all device.
                    </p>

                    <a href="/material_chosed"> <button class="btn btn-primary"> choose </button> </a>
                    <a href="/materialX_preivew" target="_blank"> <button class="btn btn-info">  preview   </button> </a>

                </div>


            </div>

            <br/><hr/>

            <h4> Lonely responsive </h4>

            <div class="row">

                <div class="col-sm-3">
                    <p>
                        <br/><br/>
                        Lonely’, it’s a single page template with scrolling and animation. Lonely template designed for showcasing short biography or something like simple personal site.
                    </p>

                    <a href="/lonely_chosed"> <button class="btn btn-primary"> choose </button> </a>
                    <a href="/lonely_preivew" target="_blank"> <button class="btn btn-info">  preview   </button> </a>

                </div>

                <div class="col-sm-8" >

                    <img src="/choose_template/img/lonely_.png">

                </div>

            </div>


            <hr/>
            <h4> Material X</h4>

            <div class="row">

                <div class="col-sm-8" >

                    <img src="/choose_template/img/materilizeX.png">

                </div>

                <div class="col-sm-3">
                    <p>
                        MaterialX is a material design Resume and Portfolio Template based on Twitter Bootstrap and Materialize, developed for professional to display their Profile, Resume etc. Easily customizable and fully responsive for all device.
                    </p>

                    <button class="btn btn-primary"> choose </button>
                    <button class="btn btn-info"> preview </button>

                </div>


            </div>

            <br/><hr/>


        </div>

        <script src="/lonely/js/jquery.min.js"></script>
        <script src="/Admin_panel_/js/bootstrap.min.js"></script>
        <!-- Core JavaScript Files -->
        <script src="/lonely/js/bootstrap.min.js"></script>
        <script src="/lonely/js/jquery.easing.min.js"></script>
        <script src="/lonely/js/jquery.sticky.js"></script>
        <script src="/lonely/js/jquery.scrollTo.js"></script>
        <script src="/lonely/js/stellar.js"></script>
        <script src="/lonely/js/wow.min.js"></script>
        <script src="/lonely/js/owl.carousel.min.js"></script>
        <script src="/lonely/js/nivo-lightbox.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/lonely/js/custom.js"></script>


        <script>
            var Main_div_height = $("body").prop('scrollHeight');

            //                Main_div_height += $('footer').height();
            $("#leftCol").css('height',Main_div_height);
            $("#leftCol").css('position','fixed');
        </script>

        </body>
    </div>

@endsection