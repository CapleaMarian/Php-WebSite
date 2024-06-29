<?php
	session_start();
?>

<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<!-- Social Media Buttons -->

		<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6644d8a76c912d0019965c3e&product=inline-share-buttons&source=platform" async="async"></script>
	
		<style>
        	canvas {
        	    border: 1px solid black;
        	}
        	svg {
        	    border: 1px solid black;
        	    width: 200px;
        	    height: 200px;
        	}
    	</style>
	
			<!--  CAUTARE CLASE OBIECTE REMEMBER ME VALIDARE-->

	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
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
							<li><a href="test.php"> TEST </a></li>
							<?php
								if(isset($_COOKIE['username']) && $_COOKIE['username']=="admin") {
							?>
							<li><a href="admin.php" class="button primary">Admin</a></li>
							<?php
								}
							?>
							<?php
								if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
							?>
							<li><a href="signin.php" class="button primary">Sign Up</a></li>
							<li><a href="login.php" class="button primary">Log In</a></li>
							<?php
								} elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
							?>
							<li><a href="logout.php" class="button primary">Log Out</a></li>
							<?php
								}
							?>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>TWENTY</h2>
						</header>
						<p>This is <strong>Twenty</strong>, a free
						<br />
						responsive template
						<br />
						by <a href="http://html5up.net">HTML5 UP</a>.</p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-chart-bar"></span>
						<?php
						    include 'connection.php';
						    $sql='SELECT * FROM images; ';
						    $query= mysqli_query($con,$sql)or die(mysqli_error($con));
						?>
						<table width="50%" cellpadding="4" cellspace="4" rules="rows">
						    <tr>
						        <th>Nume</th>
						        <th>Imagine</th>
						    </tr>
						    <?php while($row=mysqli_fetch_array($query)){
						        ?>
						        <tr style="border-bottom: 1px solid black;">
						    <td><?php echo $row['title'];?></td>
						    <td><img src="<?php echo $row['image'];?>"></td>
						</tr>
						   <?php } ?>
							
						</table>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
									<footer>
										<ul class="buttons">
											<li><a href="#" class="button">Find Out More</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<li><span class="icon fa-clock"><span class="label">Feature 1</span></span></li>
										<li><span class="icon solid fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon solid fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon solid fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon solid fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>This is Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>Also Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>Probably Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Next look at this <strong>cool stuff</strong></h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<h1>Redare Audio (MP3)</h1>
    									<?php
    									// Calea către fișierul audio
    									$audioFile = 'assets/Avicii.mp3';

    									// Verifică dacă fișierul există
    									if (file_exists($audioFile)) {
    									    echo '<audio controls>
    									            <source src="' . $audioFile . '" type="audio/mpeg">
    									          </audio>';
    									}
    									?>	
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<h1>Redare Video MP4</h1>
										<?php
    									// Calea către fișierul video
    									$videoFile = 'assets/Timber.mp4';

    									// Verifică dacă fișierul există
    									if (file_exists($videoFile)) {
    									    echo '<video width="640" height="480" controls>
    									            <source src="' . $videoFile . '" type="video/mp4">
    									          </video>';
    									}
    									?>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<h1>Redare Video YouTube</h1>
    									<?php
    									// ID-ul videoclipului YouTube
    									$youtubeVideoId = '5gg17XXXiNo'; 

    									// Generează URL-ul de încorporare
    									$embedUrl = 'https://www.youtube.com/embed/' . $youtubeVideoId;

    									echo '<iframe width="560" height="315" src="' . $embedUrl . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    									?>	
									</section>

								</div>

								<div class="col-6 col-12-narrower">

									<section>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.166315682728!2d27.57150399584628!3d47.17418018901294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sAlexandru%20Ioan%20Cuza%20University!5e0!3m2!1sen!2sro!4v1716065061309!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</section>

								</div>

								<div class="col-6 col-12-narrower">

									<section>
										<h1>Incorporare Canvas și SVG</h1>
    									<h2>Canvas</h2>
    									<?php
    									echo '<canvas id="myCanvas" width="400" height="400"></canvas>';
    									?>

										<script>
    									    const canvas = document.getElementById('myCanvas');
    									    const ctx = canvas.getContext('2d');

    									    // Desenează un dreptunghi albastru pe canvas
    									    ctx.fillStyle = 'blue';
    									    ctx.fillRect(50, 50, 300, 300);
    									</script>
									</section>

								</div>

								<div class="col-6 col-12-narrower">

									<section>
										<h2>SVG</h2>
    									<?php
    									echo '<svg id="mySvg" width="200" height="200">
    									        <circle cx="100" cy="100" r="50" stroke="black" stroke-width="3" fill="red" />
    									      </svg>';
    									?>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer>

						</section>

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button primary">Take My Money</a></li>
							<li><a href="#" class="button">LOL Wut</a></li>
						</ul>
					</footer>

				</section>

			<!-- Footer -->
				<footer id="footer">

					<div class="sharethis-inline-share-buttons"></div>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>