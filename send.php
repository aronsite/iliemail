<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Email Generator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								<h1>Email Generator</h1>
								<p>Email has been successfully sent.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="index.html#contact">Go Again</a></li>
								<li><a href="index.html">Home</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">


						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<?php 
$email = $_POST['email'];
$myemail = $_POST['myemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to = $myemail;
$email_subject = "$subject";
$email_body = "$message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
								<form method="post" action="send.php">
									<div class="fields">
										<div class="field half">
											<label for="email">Enviador</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field half">
											<label for="myemail">Receptor</label>
											<input type="text" name="myemail" id="myemail" />
										</div>
										<div class="field">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>


					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; All rights reserved to Ilie Network<a href="https://html5up.net"></a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
