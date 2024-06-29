<?php
	session_start();
	include("connection.php");

	class Persoana{
	    public $nume;
	    public $prenume;
	    public function setNume($var){
	        $this->nume=$var;
	    }
	    public function setPrenume($var){
	        $this->prenume=$var;
	    }
	    public function showNume(){
	        echo "<b>Nume:</b> ".$this->nume;
	    }
	    public function showPrenume(){
	        echo "<b>Prenume:</b> ".$this->prenume;
	    }
	}

	$search_term = '';
	if(isset($_POST["search_box"])){
	    $search_term= mysqli_real_escape_string($con, $_POST["search_box"]);
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
						<h2>Look for Photos</h2>
						<p>Use the form below to give /dev/null a piece of your mind.</p>
					</header>

					<!-- One -->
					<section class="wrapper style4 special container medium">
						<h1>Obiecte din clasa Persoana: </h1>
						<?php
							$nume = "Bogdan";
							$date= new Persoana();
							$date->setNume($_SESSION["username"]);
							$date->setPrenume($nume);
							$date->showNume();
							echo "<br>";
							$date->showPrenume();
							echo "<br>";
						?>
						<!-- Content -->
						<div class="content">
							<div class="row gtr-50">
								<div class="col-12">
									<form name="search.php" method="post" action="contact.php">
                					    Search: <input type="text" name="search_box" value="">
										<br>
                					    <div class="col-12">
											<ul class="buttons">
												<li><input type="submit" class="special" value="Search Photo"/></li>
											</ul>
										</div>
                					</form>
									<br>
									<?php
                						$sql = "SELECT * FROM images";
                						if(!empty($search_term)){
                						    $sql .= " WHERE title='{$search_term}'";
                						}
                						$res = mysqli_query($con, $sql) or die(mysqli_error($con));
                						$nr = 0;
                						$nr2 = 0;
                						echo "<table border='1'>
                							<tr>
                								<th>ID</th>
                								<th>Image</th>
                								<th>Title</th>
                							</tr>";
                						while($row = mysqli_fetch_array($res)){
                						    $nr++;
                						}
                						mysqli_data_seek($res, 0); // Reset the pointer to the beginning
										while($row = mysqli_fetch_array($res))
										{
											echo "<tr>";
											echo "<td>" . $row['id'] . "</td>";
											echo "<td> <img src='".$row['image']."' height='100px' width='100px'  ></td>";
											echo "<td>" . $row['title'] . "</td>";
											echo "</tr>";
										}
										echo "</table>";
									?>
								</div>
							</div>
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