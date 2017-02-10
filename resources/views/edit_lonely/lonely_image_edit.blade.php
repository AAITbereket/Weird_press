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

            <h3> Lonely template edit Images </h3>

        <form method="POST" enctype="multipart/form-data" action="/upload_images_lonely">

            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <div class="row">

                    <div class="col-xs-4">

                        Change Background Image : <input type="file" name="Bg_image">

                    </div>

                    <div class="col-xs-4">

                        My story left side image : <input type="file" name="My_Story_left_image">

                    </div>

                </div>

                <br/><hr/>

                <h4 style="margin:60px 0 30px;"> Edit Photos in Gallery  </h4>

                <div class="row">

                        <div class="col-xs-5">

                            Upload photos : <input type="file" name="images[]" multiple>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-primary"> Submit </button>
                        </div>

                    </div>
        </form>
            <br/><hr/><br/><br/>
            <div class="row">
                    <div class="col-md-5">

                        <h4> Delete Uploaded Photo  </h4>

                        <form method="POST" id="deleteImage" >

                            <select name="photo" class="dropdown-toggle col-md-6" data-style="btn-primary" >
                                  @foreach($lonely_gallery as $photo)
                                        <option value="color5"> {{$photo['Photo_URL']}} </option>
                                   @endforeach
                            </select>
                            <div class="col-md-4">

                                <button type="submit" class="btn btn-warning"> Delete </button>

                            </div>
                        </form>
                    </div>
            </div>
                {{--</div>--}}


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