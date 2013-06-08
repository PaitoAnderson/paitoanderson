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

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/screen.css" rel="stylesheet">
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond/respond.min.js"></script>
	<![endif]-->
</head>
<body class="main">
	<!-- Main Content -->
	<div class="container">
		<div class="jumbotron">
			<h1>PAITO ANDERSON</h1>
			<p class="lead">A Web Designer from Windsor, Ontario.</p>
			<p><a data-toggle="modal" href="#ContactMe" class="btn btn-large btn-custom">Contact Me</a></p>
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
	            	<a class="btn btn-danger" target="_blank" href="http://www.updatebrowser.net/">Update Browser</a>
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
							<input type="text" placeholder="Your Name" name="fullname" id="fullname" required="required"/><br />
							<input type="email" placeholder="Your E-Mail" name="email" id="email" required="required" /><br />
							<textarea cols="45" rows="5" placeholder="Your Message" name="message" id="message" required="required"></textarea>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-custom">Send Message</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
		
		<div class="project">
			<img class="project-img" src="images/mb-project.jpg" alt="" />
			<img class="project-img-sub left" src="images/mb-project-sub1.jpg" alt="" />
			<img class="project-img-sub right" src="images/mb-project-sub2.jpg" alt="" />
		</div>
		
		<!--<div class="project">
			<img class="project-img" src="http://placehold.it/1170x427" alt="" />
		</div>-->
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-9349643-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</body>
</html>