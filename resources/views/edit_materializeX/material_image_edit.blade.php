@extends('../admin_panel_DIR/admin_panel_view')


@section('content')


    <div class="" style="max-width: 990px;" id="main_display" xmlns:Auth="http://www.w3.org/1999/xhtml">



        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>MaterialX - Material Design Personal Template</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

            <!-- Favicon-->
            <link rel="shortcut icon" href="/materializeX/images/favicon.png" >

            <!-- Stylesheets -->
            <link rel="stylesheet" href="/materializeX/css/normalize.css">
            <link rel="stylesheet" href="/materializeX/font/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="/materializeX/css/materialize.min.css" media="screen,projection" />
            <link rel="stylesheet" href="/materializeX/css/bootstrap.css" media="screen,projection" />

            {{--<link rel="stylesheet" href="/materializeX/css/animate.min.css" media="screen,projection" />--}}
            {{--<link rel="stylesheet" href="/materializeX/css/sweet-alert.css" media="screen,projection" />--}}

            <link rel="stylesheet" href="/materializeX/css/owl.carousel.css" media="screen,projection" />
            <link rel="stylesheet" href="/materializeX/css/owl.transitions.css" media="screen,projection" />
            <link rel="stylesheet" href="/materializeX/css/owl.theme.css" media="screen,projection" />

            <link rel="stylesheet" href="/materializeX/css/main.css">
            <link rel="stylesheet" href="/materializeX/css/responsive.css">


            <!-- Choose your default colors -->
            <link rel="stylesheet" href="/materializeX/css/colors/color1.css">
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color2.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color3.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color4.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color5.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color6.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color7.css"> -->
            <!-- <link rel="stylesheet" href="/materializeX/css/colors/color8.css"> -->

            <!--[if lt IE 9]>
            <script src="/materializeX/js/html5shiv.js"></script>
            <![endif]-->


            <style>

                .container
                {
                    width:990px;
                }

                h1,h2,h3,h4,h5,h6
                {
                    color :#2A3F54;
                }

                .input-field, .validate
                {
                    color: #2A3F54;
                }

            </style>

        </head>

        <body>

        <!-- Main Container -->
        <main id="app" class="main-section">

            <div class="container">

                <h5 >Materialize Edit images </h5>


                <form method="POST" class="ajax" enctype="multipart/form-data" id = 'material_upload_images'>

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <hr>
                    <br>

                    <div class="row">
                        <div class="col s5">

                            <div>

                                <h3> Background Image Change</h3>
                                <br/>
                                <input class="waves-effect waves-teal btn-flat" type="file" accept="image/*" name="Background_Image"/>
                                <br/><br/>
                                <h3> Profile photo upload</h3>
                                <img src="/edit_materialx/img/person.png" style="max-height: 168px;">

                                <br/>
                                <input class="waves-effect waves-teal btn-flat" type="file" accept="image/*" name="profile_photo"/>

                            </div>

                        </div>




                        <div class="col s5 offset-s1">

                            <h2> Upload your CV  </h2>
                            <br/>
                            <div class="input-field col s5">
                                <input class="waves-effect waves-teal btn-flat" type="file" accept=".pdf,.doc,.docx,.RTF,.TXT" name="Cv_doc"/>
                            </div>

                        </div>

                    </div>

                    <br/>

                    <button type="submit" class="btn waves-effect waves-light">  Submit </button>

                </form>

            </div>



        </main>
        <!-- Main Container end-->


        <!-- JavaScripts -->
        <script src="/materializeX/js/jquery.min.js"></script>
        <script src="/materializeX/js/jquery.easing.1.3.js"></script>
        <script src="/materializeX/js/detectmobilebrowser.js"></script>

        <script src="/materializeX/js/owl.carousel.min.js"></script>
        <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
        <script src="/materializeX/libs/materialize/js/materialize.min.js"></script>
        <script src="/materializeX/js/sweet-alert.min.js"></script>
        {{--<script src="/materializeX/js/common.js"></script>--}}
        <script src="/materializeX/js/main.js"></script>


        </body>

        <script>
            var Main_div_height = $("body").prop('scrollHeight');
            //                Main_div_height += $('footer').height();
            $("#leftCol").css('height',Main_div_height);
            $("#leftCol").css('position','fixed');
        </script>


        <script>
            // $("table").stupidtable();
//            $(document).ready(function() {
//
//
//                // Ajax for our form
//                $('form.ajax').submit(function(e){
//                    e.preventDefault();
//
//                    var registerForm = $("#material_edit");
////					var formData = new FormData(registerForm);
//                    var formData = registerForm.serialize();
//
//                    $.ajax({
//                        type     : "POST",
//                        url      : '/X_edit',
//                        data     : formData,
//                        success  : function(data) {
//                            console.log(data);
//                        }
//                    });
//                });
//            });
        </script>


    </div>

@endsection