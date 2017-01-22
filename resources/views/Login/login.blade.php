

<!DOCTYPE html>
<html>
<head>
<title>VascuTech Admin-_Login</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
	<link rel="shortcut icon" type="image/png" href="/_Login/img/favicon.png" />
<!-- Style --> <link rel="stylesheet" href="/_Login/css/style.css" type="text/css" media="all" />

</head>
<body>
<div class="container">
<br/>
<br/>
<br/>
<br/> <br/>
<br/>
	<div class="signin" class="col-sm-4">
     	<form method="post" action="login">
	      	<input id="check" type="text" name="UserName" class="user"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
	      	<input type="password" name="password" class="pass"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
	      	<?php  echo csrf_field(); ?>
          	<input type="submit" value="Login" />
	 	</form>
	</div>
</div>
<div class="footer">
     
</div>
</body>
</html>