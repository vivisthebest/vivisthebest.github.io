<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>contact veev</title>

	<style type="text/css">

	@font-face {font-family: jjong; src: url(https://dl.dropboxusercontent.com/u/46535452/Please%20write%20me%20a%20song.ttf);}
	@font-face {font-family: key; src: url(https://dl.dropboxusercontent.com/u/46535452/Champagne%20%26%20Limousines.ttf);}
	@font-face {font-family: dongwoo; src: url(https://dl.dropboxusercontent.com/u/46535452/Thin%20Skinned.ttf);}

	header {
		text-align: center;
	}
	.contact-title {
		font-family: jjong;
		color: #404040;
		font-style: normal;
		font-size: 100px;
		font-weight: 300;
		line-height: 0px;
		margin-top: 150px;
		letter-spacing: 2px;
	}
	.nav {
		font-family: jjong;
		font-weight: 100;
		line-height: 96%;
		position: relative; top: 100px;
		text-align: center;
		width: 100%;
		z-index: 999;	
	}
	.toplink {
		display: inline;
		padding: 7px;
		font-size: 35px;
		-webkit-transition: all 0.7s ease-in-out;
		-moz-transition: all 0.7s ease-in-out;
		-0-transition: all 0.7s ease-in-out;
		-ms-transition: all 0.7s ease-in-out;
		transition: all 0.7s ease-in-out;
	}
	.message {
		display: block;
		margin: 0 auto;
		width: 576px;
	}
    .alerts {
        font-family: jjong;
        font-size: 35px;
        text-align: center;
        position: relative;
        margin-top: 60px;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 100px;
        width: 456;
    }
	form {
		margin-top: 60px;
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 100px;
		width: 459px;
	}
	label {
		font-family: key;
		font-size: 20px;
		font-weight: 900;
	}
	input, textarea {
		font-family: arial;
		width: 439px;
		height: 20px;
		background: #efefef;
		border: 1px solid #dedede;
		padding: 10px;
		margin-top: 3px;
		font-size: 12px;
		color: #3a3a3a;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-o-border-radius:5px;
		-ms-border-radius: 5px;
		border-radius: 5px;
	}
	textarea {
		height: 180px;
	}
	input:focus, textarea:focus {
		border: 1px solid #97d6eb;
	}
	#send {
		font: jjong;
		width: 127px;
		height: 38px;
		border: none;
		margin-top: 20px;
		cursor: pointer;
	}
	send:hover {
		opacity: .9;

	}
	a:link {
		color: #aaaaaa;
		text-decoration: none;
		-webkit-transition: all 0.7s ease-in-out;
		-moz-transition: all 0.7s ease-in-out;
		-o-transition: all 0.7s ease-in-out;
		-ms-transition: all 0.7s ease-in-out;
		transition: all 0.7s ease-in-out;
	}
	a:visited{
		color: #aaaaaa;
		text-decoration: none;
		-webkit-transition: all 0.7s ease-in-out;
		-moz-transition: all 0.7s ease-in-out;
		-o-transition: all 0.7s ease-in-out;
		-ms-transition: all 0.7s ease-in-out;
		transition: all 0.7s ease-in-out;
	}
	a:hover {
		color: #80bfe4;
		opacity: .8;
		-webkit-transition: all 0.7s ease-in-out;
		-moz-transition: all 0.7s ease-in-out;
		-o-transition: all 0.7s ease-in-out;
		-ms-transition: all 0.7s ease-in-out;
		transition: all 0.7s ease-in-out;
	}
	</style>
</head>

<body>
	<header>
		<div class="nav">
			<div class="toplink"><a href="./index.html">home</a></div>
			<div class="toplink"><a href="./about-veev.html">about</a></div>
			<div class="toplink"><a href="./veevs-work.html">work</a></div>
			<div class="toplink"><a href="./contact-veev.php">contact</a></div>
		</div>
		<div class="contact-title">contact me</div>
	</header>

	<section class="message">
		<form method="post" action="send.php" name = "submit">
            <?php if (!(isset($_POST['done']))) {?>
			<label>name</label>
			<input name="name" placeholder="type here...">

			<label>email</label>
			<input name="email" type="email" placeholder="type here...">     

			<label>message</label>
			<textarea name="message" placeholder="type here..."></textarea>

			<label>*What is 2+2? (Anti-spam)</label>
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
	</html>