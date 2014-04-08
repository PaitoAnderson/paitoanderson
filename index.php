<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	//Validation
	if (strlen($_POST["email"]) < 4) {
		$error = "Please enter your email address.";
	}
	if (strlen($_POST["fullname"]) < 3) {
		$error = "Please enter your name.";
	}
	if (strlen($_POST["message"]) < 5) {
		$error = "Please enter a message.";
	}

	if (strlen($error) == 0) {
		//Format Email
		$to = "pj.paito@gmail.com";
		$subject = "Message from: " . $_POST["fullname"];
		$body = $_POST["message"];
		$headers = "From: " . $_POST["email"] . "\r\nX-Mailer: php";

		//Send Email
		if (mail($to, $subject, $body, $headers)) {
			$success = "Message was sent!";
		} else {
			$error = "Message delivery failed...please try again.";
		}
	}
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="paitoanderson.com is the personal website of Paito Anderson a web designer from Windsor, ON.">
    <meta name="author" content="Paito Anderson">
    <link rel="icon" type="image/png" href="http://paitoanderson.com/favicon.png" />

    <title>Paito Anderson</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/screen.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body class="main">
	<!-- Main Content -->
	<div class="container">
		<div class="jumbotron">
			<h1>PAITO ANDERSON</h1>
			<p class="lead">A Web Designer from Windsor, Ontario.</p>
			<p><a data-toggle="modal" href="#ContactMe" class="btn btn-lg btn-custom">Contact Me</a></p>
		</div>

		<?php
		if (strlen($error) > 0) {
			echo("<div class=\"alert alert-danger fade in\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Error!</strong> " . $error . "</div>");
		}
		if (strlen($success) > 0) {
			echo("<div class=\"alert alert-success fade in\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Success!</strong> " . $success . "</div>");
		}
		?>

		<!--[if lt IE 10]>
		    <div class="alert alert-block alert-error fade in">
	            <button type="button" class="close" data-dismiss="alert">&times;</button>
	            <h4>Warning!</h4>
	            <p>You are using an outdated browser, click below to upgrade.</p>
	            <p>
	            	<a class="btn btn-danger" target="_blank" href="http://whatbrowser.org/">Update Browser</a>
	            </p>
          	</div>
		<![endif]-->

		<!-- Modal -->
		<div class="modal fade" id="ContactMe">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="#" method="post">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Contact Me</h4>
						</div>
						<div class="modal-body">
							<input type="text" class="form-control" placeholder="Your Name" name="fullname" id="fullname" required="required"/><br />
							<input type="email" class="form-control" placeholder="Your E-Mail" name="email" id="email" required="required" /><br />
							<textarea cols="45" class="form-control" rows="5" placeholder="Your Message" name="message" id="message" required="required"></textarea>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-custom">Send Message</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dalog -->
		</div><!-- /.modal -->

		<!--<div class="project-title">
			<h1><a target="_blank" href="http://www.skrumaz.com/">SKRUMAZ</a></h1>
		</div>
		<div class="project">
			<img class="project-img" src="http://placehold.it/1170x427" alt="" />
		</div>-->

		<div class="project-title">
			<h1><a target="_blank" href="http://www.mexicanbaker.com/">MEXICAN BAKER</a></h1>
		</div>
		<div class="project">
			<img class="project-img" src="images/mb-project.jpg" alt="" />
			<img class="project-img-sub left" src="images/mb-project-sub1.jpg" alt="" />
			<img class="project-img-sub right" src="images/mb-project-sub2.jpg" alt="" />
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-9349643-1', 'paitoanderson.com');
	  ga('send', 'pageview');
	</script>

</body>
</html>
