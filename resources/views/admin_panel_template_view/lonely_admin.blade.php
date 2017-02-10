@extends('../admin_panel_DIR.admin_panel_view')


@section('content')

    <div class="" style="max-width: 990px;" id="main_display">


        <?php

        $Logged_user_email =$lonely_main_table['Logged_user_email'] ;
        $Background_image = $lonely_main_table['Background_image'];
        $User_Name_display = $lonely_main_table['User_Name_display'];
        $Name_subtitle = $lonely_main_table['Name_subtitle'];
        $Story_title = $lonely_main_table['Story_title'];
        $My_story = $lonely_main_table['My_story'];
        $Block_qoute = $lonely_main_table['Block_qoute'];
        $Story_leftSide_image = $lonely_main_table['Story_leftSide_image'];
        $Hobby_one = $lonely_main_table['Hobby_one'];
        $Hobby_two = $lonely_main_table['Hobby_two'];
        $Hobby_three = $lonely_main_table['Hobby_three'];
        $Hobby_four = $lonely_main_table['Hobby_four'];
        $Phone = $lonely_main_table['Phone'];
        $URL_to_access = $lonely_main_table['URL_to_access'];

        $Photo_gallery = $lonely_gallery;

        ?>

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
            <link href="/lonely/css/animate.css" rel="stylesheet" />
            <link href="/lonely/css/style.css" rel="stylesheet">
            <link href="/lonely/color/default.css" rel="stylesheet">



            <style>

            .container
                {
                    width:990px;
                 }

            </style>

            <style>

                .intro {
                    width: 100%;
                    position: relative;
                    background: url('{{$Background_image}}') no-repeat top center;
                    background-size: cover;
                }
            </style>
        </head>

        <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        {{--<!-- Preloader -->--}}
        <div id="preloader">
            <div id="load"></div>
        </div>

        {{--<!-- Section: intro -->--}}
        <section id="intro" class="intro">

            <div class="slogan">
                <a ><img src="/lonely/img/logo.png" alt="" /></a>
            </div>
            <div class="page-scroll">
                <a href="#about">
                    <i class="fa fa-angle-down fa-5x animated"></i>
                </a>
            </div>
        </section>
        {{--<!-- /Section: intro -->--}}

        {{--<!-- Navigation -->--}}
        <div id="navigation" style="margin-left: -10px; width: 990px">
            <nav class="navbar navbar-custom" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->

                            <div class="collapse navbar-collapse" >
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#intro">Home</a></li>
                                    <li><a href="#about">About Me</a></li>
                                    <li><a href="#gallery">My gallery</a></li>
                                    <li><a href="#contact">Talk to me</a></li>
                                </ul>
                            </div>
                            {{--<!-- /.Navbar-collapse -->--}}

                        </div>
                    </div>
                </div>
                {{--<!-- /.container -->--}}
            </nav>
        </div>
        {{--<!-- /Navigation -->--}}

        {{--<!-- Section: about -->--}}
        <section id="about" class="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">

                        <div class="section-heading text-center">
                            <div class="wow bounceInDown" data-wow-delay="0.2s">
                                <h2>My name is {{ $User_Name_display }}</h2>
                            </div>
                            <p class="wow bounceInUp" data-wow-delay="0.3s">{{$Name_subtitle}}</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <img src="{{$Story_leftSide_image}}" class="img-responsive img-rounded" alt="" />
                    </div>
                    <div class="col-md-6">
                        <p><strong>{{$Story_title}}</strong></p>
                        <p>
                            {{$My_story}}
                        </p>
                        <blockquote>
                            {{$Block_qoute}}
                        </blockquote>
                        <a href="#gallery" class="btn btn-skin btn-lg btn-scroll">See my photos</a>
                    </div>
                </div>
            </div>
        </section>
        {{--<!-- /Section: about -->--}}

        {{--<!-- Section: separator -->--}}
        <section id="separator" class="home-section parallax text-center"  style="min-width: 990px" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <i class="fa fa-graduation-cap fa-5x"></i>
                            </div>
                            <span class="color-white">{{$Hobby_one}}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <i class="fa fa-heart fa-5x"></i>
                            </div>
                            <span class="color-white">{{$Hobby_two}}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <i class="fa fa-plane fa-5x"></i>
                            </div>
                            <span class="color-white">{{$Hobby_three}}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <i class="fa fa-camera fa-5x"></i>
                            </div>
                            <span class="color-white">{{$Hobby_four}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<!-- /Section: separator -->--}}


        {{--<!-- Section: gallery -->--}}
        <section id="gallery" class="home-section text-center bg-gray" style="padding-bottom: 0px;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>My photo gallery</h2>
                                <p>Take a look at my personal moment, enjoy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-12" >
                        <div class="wow bounceInUp" data-wow-delay="0.4s">
                            <div id="owl-works" class="owl-carousel">

                                @foreach($Photo_gallery as $photo)
                                    <div class="item"><a href="{{$photo['Photo_URL']}}" title="This is an image title" data-lightbox-gallery="gallery1"><img src="{{$photo['Photo_URL']}}" class="img-responsive" alt="img"></a></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<!-- /Section: services -->--}}




        {{--<!-- Section: contact -->--}}
        <section id="contact" class="home-section text-center" style="padding-bottom: 70px;">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">

                            <div class="section-heading">
                                <div class="wow bounceInDown" data-wow-delay="0.4s">
                                    <h2>Email or phone are welcome</h2>
                                </div>
                                <p class="wow lightSpeedIn" data-wow-delay="0.3s">Gentleman, introduce your self and get in touch with me privately</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-offset-2 ">
                        <div class="form-wrapper marginbot-50">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="service">Friendship request</option>
                                            <option value="suggestions">Wanna marry you</option>
                                            <option value="product">Prom night invitation</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Message"></textarea>
                                    </div>


                                    <button type="submit" class="btn btn-skin btn-block" id="btnContactUs">
                                        Send Message</button>

                                </div>
                            </form>

                        </div>
                        <div class="text-center">
                            <p class="lead"><i class="fa fa-phone"></i> Call me {{$Phone}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        {{--<!-- /Section: contact -->--}}

        <footer style="margin-left: 0; min-width: 990px ; padding: 0 0 0 0;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <p>&copy;Copyright 2017 . Alice Lonely. design by weird press</p>
                    </div>
                </div>
            </div>
        </footer>

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
//                alert(Main_div_height);
                $("#leftCol").css('height',Main_div_height);
                $("#leftCol").css('position','fixed');
            </script>

       </body>
    </div>

@endsection