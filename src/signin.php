      
<?php

session_start();
$_SESSION['username']='';

$errUsername = "Numele de utilizator este obligatoriu.";
$errEmail = "Emailul este obligatoriu";
$errPassword = "Parola este obligatorie";
$errCapchea = "Capchea este obligatorie";
$errors = 0;


if(isset($_POST['submit'])) {
    // validare Username
    if (!preg_match("/^[a-zA-Z0-9_]{5,15}$/", $_POST['username'])) {
        $errUsername = "Numele de utilizator trebuie să aibă între 5 și 15";
        $errors = 1;
    }else{
        $_SESSION['username']=$_POST['username'];
    }

    // validare E-mail
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Email-ul nu este valid.";
        $errors = 1;
    }

    // Validare parolă
    if (!preg_match("/^[a-zA-Z0-9_]{6,15}$/", $_POST['password'])) {
        $errPassword = "Parola 6 caractere, fara lucruri speciale";
        $errors = 1;
    }

    //verificare capchea
    if ($_POST['captcha']!=$_POST['correctsum']){
        $errCapchea = "Suma nu e corecta :( .";
        $errors = 1;
    }

    if($errors == 0){
        header("Location:SuccesSignUp.php");
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
						<li><a href="login.php" class="button primary">Log In</a></li>
					</ul>
				</nav>
			</header> 

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-envelope"></span>
						<h2>Sign In</h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action="signin.php" method="post">
                                        <?php
							    	        $number1 = rand(1,10);
							    	        $number2 = rand(1,10);
							    	        $sum = $number1 + $number2;
							            ?>
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="username" placeholder="Example_123" required/>
											</div>
                                            <div class="col-6 col-12-mobile">
												<input type="email" name="email" placeholder="example@email.com" required/>
											</div>
											<div class="col-6 col-12-mobile">	
												<input type="password" name="password" placeholder="Example_123" required/>
											</div>
                                            <div class="col-6 col-12-mobile">
                                                <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
    								            <input type="text" name="captcha" placeholder="<?php echo $number1.' + '. $number2 .' = '; ?>"/><br/>
                                            </div>

											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" name="submit" class="special" value="Sign In" /></li>
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