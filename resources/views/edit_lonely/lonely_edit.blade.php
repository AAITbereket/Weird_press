@extends('admin_panel_DIR.admin_panel_view')


@section('content')

    <div class="" style="max-width: 990px;" id="main_display">

        <?php

        $User_Name_display = $lonely_main_table['User_Name_display'];
        $Name_subtitle = $lonely_main_table['Name_subtitle'];
        $Story_title = $lonely_main_table['Story_title'];
        $My_story = $lonely_main_table['My_story'];
        $Block_qoute = $lonely_main_table['Block_qoute'];
        $Hobby_one = $lonely_main_table['Hobby_one'];
        $Hobby_two = $lonely_main_table['Hobby_two'];
        $Hobby_three = $lonely_main_table['Hobby_three'];
        $Hobby_four = $lonely_main_table['Hobby_four'];
        $Phone = $lonely_main_table['Phone'];

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

                    Name :<input type="text" class="form-control" value="{{$User_Name_display}}" placeholder="Type Name to be displayed" name="Name">

                </div>


            </div>

            <hr/>
            <br/>
            <div class="row">

                <div class="col-xs-6">

                    Name subtitle : <textarea rows="2" style="min-width: 440px;"  name="name_subtitle" > {{$Name_subtitle}} </textarea>

                </div>

                <div class="col-xs-6">

                    Story title : <textarea rows="2" style="min-width: 400px;"  name="story_stitle">{{$Story_title }}</textarea>

                </div>

            </div>

            <hr/>
            <br/>

            <div class="row">

                <div class="col-xs-6">

                    My Story : <textarea rows="4" name="Main_story" style="min-width: 440px;"> {{$My_story }} </textarea>

                </div>

                <div class="col-xs-5">

                    Block Qoute : <textarea rows="2" name="block_qoute" style="min-width: 400px;"> {{$Block_qoute }} </textarea>

                </div>

            </div>

            <br/><hr/>
            <h4> Fa-icons about me </h4>

             <div class="row">

                 <div class="col-sm-3">
                     <input type="text" class="form-control" value="{{$Hobby_one}}" placeholder="{{$Hobby_one}}" name="Hobby_one">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" value="{{$Hobby_two}}" placeholder="{{$Hobby_two}}" name="Hobby_two">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" value="{{$Hobby_three}}" placeholder="{{$Hobby_three}}" name="Hobby_three">
                 </div>

                 <div class="col-sm-3">
                     <input type="text" class="form-control" value="{{$Hobby_four}}" placeholder="{{$Hobby_four}}" name="Hobby_four">
                 </div>

             </div>

            <br/><hr/>
            <div row>

                <div class="col-sm-4">

                    <b> Phone No: </b><input type="text" class="form-control" value="{{$Phone}}" placeholder="+0123456789" name="Name">

                </div>

            </div>
            <br>
            <div class="col-sm-7" >
                <button style="float: right;" class="btn btn-primary btn-md"> Submit </button>
            </div>
            <br/><br/><hr/>

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