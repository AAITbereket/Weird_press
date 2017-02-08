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

            <h3> Lonely template edit </h3>

            <div class="row">

                <div class="col-xs-4">

                    Name :<input type="text" class="form-control" placeholder="Type Name to be displayed" name="Name">

                </div>

                <div class="col-xs-4">

                    Change Background Image : <input type="file" name="Bg_image">

                </div>

                <div class="col-xs-4">

                    My story left side image : <input type="file" name="My_Story_left_image">

                </div>

            </div>

            <hr/>
            <br/>
            <div class="row">

                <div class="col-xs-4">

                    Name subtitle : <textarea rows="1" name="name_subtitle"></textarea>

                </div>

                <div class="col-xs-5">

                    Story title : <textarea rows="1" name="story_stitle"></textarea>

                </div>

            </div>

            <hr/>
            <br/>

            <div class="row">

                <div class="col-xs-4">

                    My Story : <textarea rows="4" name="Main_story"></textarea>

                </div>

                <div class="col-xs-5">

                    Block Qoute : <textarea rows="1" name="block_qoute"></textarea>

                </div>


            </div>

            <br/><hr/>
            <h4> Fa-icons about me </h4>

             <div class="row">

                 <div class="col-sm-3">
                     <input type="text" class="form-control" placeholder="Bachelor of design" name="Hobby_one">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" placeholder="10x failed in love" name="Hobby_two">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" placeholder="I love traveling" name="Hobby_three">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" placeholder="I'm photographer" name="Hobby_four">
                 </div>

             </div>

            <br/><hr/>
            <div row>

                <div class="col-sm-4">

                    <b> Phone No: </b><input type="text" class="form-control" placeholder="+0123456789" name="Name">

                </div>

            </div>

            <br/><hr/>

            <h4 style="margin:60px 0 30px;"> Edit Photos in Gallery  </h4>

            <div class="row">

                <div class="col-xs-5">

                    Upload photos : <input type="file" name="gallery_photo">

                </div>

                <div class="col-md-5">

                    <h4> Delete Uploaded Photo  </h4>

                    <select name="Color_choice" class="dropdown-toggle col-md-6" data-style="btn-primary" >

                        <option value="Photo{{" ".$id_photo}}">Photo {{" ".$id_photo}}</option>

                    </select>
                    <div class="col-md-4">

                        <button class="btn btn-warning"> Delete </button>

                    </div>


                </div>

            </div>

            <br/><hr/>
            <button class="btn btn-primary"> Submit </button>

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