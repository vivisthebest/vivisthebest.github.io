<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>contact veev</title>

	<link rel="stylesheet" type="text/css" href="./style/main.css">
</head>

<body>
	<header>
		<div class="nav">
			<div class="toplink"><a href="./index.html">home</a></div>
			<div class="toplink"><a href="./about-veev.html">about</a></div>
			<div class="toplink"><a href="./veevs-work.html">projects</a></div>
			<div class="toplink"><a href="./contact-veev.html">contact</a></div>
		</div>
		<div class="contact-title">contact me</div>
	</header>
	<div class="me"><a href="http://github.com/vivisthebest">github.com/vivisthebest</a> &#8226; vivyee@bu.edu</div>
	<div class="contactinfo">
		<p>Please feel free to email me for any project requests or inquiries. I can be contacted through my email (vivyee@bu.edu) or my <a href="www.linkedin.com/in/vivianayee">LinkedIn</a>.</p>

	<section class="message">
		<form method="post" action="send.php" name = "submit">
            <?php if (!(isset($_POST['done']))) {?>
			<label>name</label>
			<input name="name" placeholder="type here...">

			<label>email</label>
			<input name="email" type="email" placeholder="type here...">     

			<label>message</label>
			<textarea name="message" placeholder="type here..."></textarea>

			<label>*What is 2+2? (Antispam)</label>
			<input name="human" placeholder="answer...">

			<input id="send" name="send" type="submit" value="Submit">

            <?php 
            } else {
            $done = $_POST['done'];

            if ($done == 1) { ?>
                <div class="alerts"><p>message sent</p></div>
            <?php } else if ($done == 2) { ?>
                <div class="alerts"><p>error...try again</p></div>
            <?php } else if ($done == 3) { ?>
                <div class="alerts"><p>go learn maff stoopid</p></div>
            <?php } else { ?>
                <div class="alerts"><p>fill all fields please</p></div>
            <?php } 
            }
            exit;
            ?>


		</form>        
	</section>


	<footer class="form">
	</footer>

	</div>
	</html>