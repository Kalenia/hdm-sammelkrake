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
    <link rel="stylesheet" href="css/ExperimentKachelnCss.css">
</head>
<body>

    <div class="wrapper">
        <aside>
            <ul>
                <img class="menubild" src="img/images.jpg" alt="menubild">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </aside>


            <div class="officialNews">
                <span class="title"> Offizielle News </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="kennstDuSchon">
                <span class="title"> Kennst du schon ... ? </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="ownCloud">
                <span class="title"> OwnCloud </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="sBar">
                <span class="title"> Speiseplan der S Bar </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="schedule">
                <span class="title"> Dein persönlicher Stundenplan </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="studentsStuff">
                <span class="title"> Deine Informationen </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>


    </div>



</body>
</html>