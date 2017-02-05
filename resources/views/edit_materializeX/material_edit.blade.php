@extends('../admin_panel_DIR/admin_panel_view')


@section('content')

	<div class="" style="max-width: 990px;" id="main_display">



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

			<link rel="stylesheet" href="/materializeX/css/animate.min.css" media="screen,projection" />
			<link rel="stylesheet" href="/materializeX/css/sweet-alert.css" media="screen,projection" />

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

			<h5>Materialize Edit</h5>

			<hr>

			<div class="row">


				<div class="input-field col s4">
					<input id="first_name" type="text" class="validate" required>
					<label for="first_name"> HI I am </label>
				</div>

				<div class="input-field col s2"></div>

				<div class="input-field col s4">
					<input id="first_name" type="text" class="validate" required>
					<label for="first_name"> Name subtitle </label>
				</div>

				<br> <br>
			</div>
			<br>
			<hr>
			<div class="row">
				<div class="col s5">

					<div class="input-field">
						<textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
						<label for="textarea1">My Story</label>
					</div>

					<br>

					<div>

						<img src="/edit_materialx/img/person.png">

					</div>

				</div>




				<div class="col s6 offset-s1">

					<h5> Personal Info. </h5>

					<label for="Name"> Name </label>
					<input id="Name" type="text" class="validate" required>

					<label for="Age"> Age </label>
					<input id="Age" type="text" class="validate" required>

					<label for="Phone_No"> Phone No </label>
					<input id="Phone_No" type="text" class="validate" required>

					<label for="email"> email </label>
					<input id="email" type="text" class="validate" required>

					<label for="Address"> Address </label>
					<input id="Address" type="text" class="validate" required>


				</div>


			</div>

		</div>

		</main>
		<!-- Main Container end-->


		<!-- JavaScripts -->
		<script src="/materializeX/js/jquery.min.js"></script>
		<script src="/materializeX/js/jquery.easing.1.3.js"></script>
		<script src="/materializeX/js/detectmobilebrowser.js"></script>
		<script src="/materializeX/js/isotope.pkgd.min.js"></script>

		<script src="/materializeX/js/owl.carousel.min.js"></script>
		{{--<script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>--}}
		<script src="/materializeX/libs/materialize/js/materialize.min.js"></script>
		<script src="/materializeX/js/jwplayer.js"></script>
		<script src="/materializeX/js/sweet-alert.min.js"></script>
		<script src="/materializeX/js/common.js"></script>
		<script src="/materializeX/js/main.js"></script>


		</body>

		<script>
			var Main_div_height = $("body").prop('scrollHeight');
			//                Main_div_height += $('footer').height();
			$("#leftCol").css('height',Main_div_height);
			$("#leftCol").css('position','fixed');
		</script>

	</div>

@endsection