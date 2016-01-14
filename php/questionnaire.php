<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php 
			include "config.php";
			session_start(); 
			if((!isset ($_SESSION['cad-email']) == true) and (!isset ($_SESSION['cad-pass']) == true)) 
				{ 
					unset($_SESSION['cad-email']); 
					unset($_SESSION['cad-pass']); 
					header('./login.html'); 
				} 
				$email = $_SESSION['cad-email'];
				$sql = mysql_query("SELECT name, InstID FROM account WHERE email = '$email'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome = $row["name"];
				      $id_instituicao = $row["InstID"];
				    }
				$sql = mysql_query("SELECT name FROM instituicao WHERE instID = '$id_instituicao'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome_inst = $row["name"];
				    }
			?>
		<title>Paideia - Sistema de educação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="http://www.formmail-maker.com/var/demo/jquery-popup-form/colorbox.css" />
        <!-- <script src="http://www.formmail-maker.com/var/demo/jquery-popup-form/jquery.colorbox-min.js"></script> -->

        <script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"480px", transition:"fade", scrolling   : false});
            });
        </script>        
        <style>
            #cboxOverlay{ background:#666666; }
        </style>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Padeia</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<header>
										<h4><?php echo "$nome - $nome_inst"; ?></h4>
									</header>
									<div class="row">
										<div class="6u 12u$(medium)">
											<h5>Questionários</h5>
											<ul class="alt">
												<li><a href="#">Questionário 1.</a></li>
												<li><a href="#">
												Questionário 2.</a></li>
												<li><a href="#">Questionário 3.</a></li>
											</ul>
										</div>
									</div>
									<div class="12u$">
										<center>
											<ul class="actions">
												<li><a class='iframe' href="newquest.html"><input type="submit" value="+" class="special" /></a></li>
											</ul>
										</center>
									</div>
								</section>
							</div>
						</section>
				</article>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/jquery.colorbox-min.js"></script>
			<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        

	</body>
</html>