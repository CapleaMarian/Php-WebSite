<?php 
    session_start();

	$_SESSION["username"]= "";
	$_SESSION["password"]= "";

	$_SESSION["AdminUsername"]= "admin";
	$_SESSION["AdminPassword"]= "admin";

	// VERIFICARE PAGINA ADMIN / USER !!!

	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;

		if($username == $_SESSION["AdminUsername"] && $password == $_SESSION["AdminPassword"]){
			header("Location: admin.php");
		} else {
			header("Location: SuccesLogIn.php");
		}
	}


	// REMEMBER ME 

	if((isset($_POST['username'])) && (isset($_POST['password']))){
	    if(($_POST['username']==$username) && ($_POST['password']==$password)){
	    	if(isset($_POST['remember'])){
	    	    /* Set cookie to last 1 month */
	    	    setcookie('username', $_POST['username'], time()+60*60*24);
	    	    setcookie('password', md5($_POST['password']), time()+60*60*24*30);
	    	}else {
	    	    /* Cookie expires after 1 hour */
	    	    setcookie('username', $_POST['username'], time() + 60*60);
	    	    setcookie('password', md5($_POST['password']), time ()+ 60*60);
	    	}
		} 
	}


?>



<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.php">Twenty <span>by HTML5 UP</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Welcome</a></li>
						<li class="submenu">
							<a href="#">Layouts</a>
							<ul>
								<li><a href="left-sidebar.php">Left Sidebar</a></li>
								<li><a href="right-sidebar.php">Right Sidebar</a></li>
								<li><a href="no-sidebar.php">No Sidebar</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="submenu">
									<a href="#">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
										<li><a href="#">Sed Magna</a></li>
										<li><a href="#">Ipsum Nisl</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="signin.php" class="button primary">Sign In</a></li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-envelope"></span>
						<h2>Log In</h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action="login.php" method="post">
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="username" placeholder="UserName" />
											</div>
											<div class="col-6 col-12-mobile">
												<input type="password" name="password" placeholder="Password" />
											</div>
											<div class="col-12">
												<ul class="buttons">
													<div class="rememberme">
                                                    	<label for="RememberMe">Remember Me !!!</label>
                                                    	<li><input type="checkbox" name="RememberMe" value="10" checked></li>
													</div>
                                                    <br><br>
													<li><input type="submit" class="special" value="Log In" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>