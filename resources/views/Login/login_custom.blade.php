<!DOCTYPE html>
<html>
<head>
<title>Login </title>
{{--<!-- For-Mobile-Apps -->--}}
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{{--<!-- //For-Mobile-Apps -->--}}
	<link rel="shortcut icon" href="/Admin_panel_/img/favicon.png" >
{{--<!-- Style --> --}}
	<link rel="stylesheet" href="/_Login/css/style.css" type="text/css" media="all" />

	<style>
		html, body {
			background-color: #2A3F54;
			color: #ECF0F1;
			font-family: 'Raleway', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin: 0;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
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
	</style>

</head>
<body>
<div class="container">
<br/>

	<div style="margin: auto auto; text-align: center;">
		<img src="/Admin_panel_/img/favicon.png" style="max-height: 153px;" >
	</div>


	<div class="signin" class="col-sm-4">
     	{{--<form method="post" action="login_request">--}}
	      	{{--<input id="check" type="text" name="UserName" class="user"  required />--}}
	      	{{--<input type="password" name="password" class="pass" required />--}}
	      	{{--{{ csrf_field() }}--}}
          	{{--<input type="submit" value="Login" />--}}
	 	{{--</form>--}}

		<div class="top-right links">
			<a href="{{ url('/') }}">Home</a>
		</div>

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">E-Mail Address</label>
				<div class="col-md-6">
					<input id="email" type="email" class="user" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
						<span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

				<div class="col-md-6">
					<input id="password" type="password" class="pass" name="password" required>

					@if ($errors->has('password'))
						<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
						<label style="float: right; ">
							<a href="{{ url('/register_custom') }}" style="color: #ff864c;">Register</a>
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8 col-md-offset-4">
					<input type="submit" value="Login" />
					{{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
						{{--Forgot Your Password?--}}
					{{--</a>--}}
				</div>
			</div>
		</form>



	</div>
</div>
<div class="footer">
     
</div>
</body>
</html>