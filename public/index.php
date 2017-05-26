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
    <link rel="stylesheet" href="style/styleTest.css">
</head>
<body>

    <div class="wrapper">
        <aside>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </aside>

            <div class="offWorkingStuff">
                <span class="title"> Offizielles Arbeitsmaterial </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="officialNews">
                <span class="title"> Offizielle News </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="studentsStuff">
            <span class="title"> Deine Informationen </span>
            <div> Lorem Ipsum dolor set ....... </div>
            </div>

            <div class="ownCloud">
                <span class="title"> OwnCloud </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="schedule">
                <span class="title"> Dein persönlicher Stundenplan </span>
                <div>
                    <?php	include('/tiles/02-schedule.php') ?>
                </div>
            </div>

            <div class="kennstDuSchon">
                <span class="title"> Kennst du schon ... ? </span>
                <div id="picture">

                </div>
                <div id="name">
                    Ludwig Kösling
                </div>
            </div>
            <div class="kurzelKai">
                <span class="title"> Kürzel Kai </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>
            <div class="importantNews">
                <span class="title"> Wichtige Meldungen </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </div>

        <div class="sbar">
            <span class="title"> S Bar Menü </span>
            <div> Lorem Ipsum dolor set ....... </div>
        </div>
        <div class="mensa">
            <span class="title"> Mensa Menü </span>
            <div> Lorem Ipsum dolor set ....... </div>
        </div>
        <div class="calendar">
            <span class="title"> Kalender </span>
            <div>
            <?php include('11-Calendar.html'); ?>
             </div>
        </div>

    </div>

</body>
</html>