<?php
if ( ! isset($_SERVER['PHP_AUTH_USER']) ) {
	header('WWW-Authenticate: Basic realm="Sammelkrake"');
	header('HTTP/1.0 401 Unauthorized');
	die("Bitte mit deinem HdM-Account anmelden");
}
const ROOT_PATH = '..';
require_once(ROOT_PATH . '/include/view_helpers.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HdM Sammelkrake</title>
    <link rel="stylesheet" href="style/styleTest2.css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,400' rel='stylesheet' type='text/css'>



</head>
<body>

<div class="container">


	<div class="hex hex-1 hex-gap">
		<div class="inner">
				<h4>HOME</h4>
				<hr />
				<p>Home Sweet Home</p>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex hex-2">
		<div class="inner">
				<h4>ABOUT US</h4>
				<hr />
				<p>We Are The Experts</p>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>


	<div class="hex hex-3">
		<div class="inner">
				<h4>CONTACT US</h4>
				<hr />
				<p>We Open Everyday</p>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex hex-gap" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex hex-gap" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

	<div class="hex" style="background-image: url(../imgs/mensa.jpg);">
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>
	</div>

</div>

</body>
</html>