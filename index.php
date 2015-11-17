<?php
	session_start();
?>
<!DOCTYPE HTML5>
<html lang="en">
<head>
	<title>GitPub!</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/skeleton.css">
  	<link rel="stylesheet" href="css/animations.css">
  	<link rel="stylesheet" href="css/foundation-icons/foundation-icons.css">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- Scripts -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/typed.min.js"></script>
	<!-- <script src="js/scripts.js"></script> -->

	<?php
	session_unset();
	session_destroy();
	$_SESSION["Login"]=false;
	$_SESSION["UserID"]=0;
	?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div id="loginBox" class=" fadeIn two-thirds column">
				<div class="container">
					<h2>[ GitPub ]</h2>
					<form id="loginForm" method="POST" action="login.php">
						<div class="row">
							<div class="nine columns">
								<label for="loginInput">Username</label>
								<input id="inputField" name="LUser" class="u-full-width" type="text" placeholder="..." id="loginInput" pattern="[0-9]+" title="Numbers Only" required>
								<label for="loginInput">Password</label>
								<input id="inputField" name="LPass" class="u-full-width" type="password" placeholder="..." id="loginInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="At least one number, upper and lower case letter, and minimum eight characters" required>
								<input type="Submit" value="Login" class="button"/>
								<div>
									<a class="socialIcons"href="https://github.com/Deathscythe84/gitpub"><i class="fi-social-github"></i></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>