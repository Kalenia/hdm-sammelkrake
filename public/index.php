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

    <!-- Add icon library -->
    <link rel="stylesheet" href="foundation-6/css/foundation.css">
    <link rel="stylesheet" href="foundation-6/css/app.css">

    <link rel="stylesheet" href="../style/Calendar.css" media="screen">

    <script src="scripts/jquery.js"></script>
    	<script src="scripts/jquery.grid.js"></script>

</head>
<body>

    <div class="wrapper">

            <article class="offWorkingStuff">
                <span class="title"> Offizielles Arbeitsmaterial </span>
                <div>
                    <?php include("../tiles/ideas/03-official-working-stuff.php")?>
                </div>
            </article>
            <article class="officialNews">
                <span class="title"> Offizielle News </span>
                <div>
                    <?php include("../tiles/ideas/04-official-infos.php")?>
                </div>
            </article>
            <article class="studentsStuff">
            <span class="title"> Deine Informationen </span>
            <div>
                <?php include("../tiles/ideas/06-students-stuff.php")?>
            </div>
            </article>

            <article class="ownCloud">
                <span class="title"> OwnCloud </span>
                <div> Lorem Ipsum dolor set ....... </div>
            </article>
            <article class="schedule">

                <div>
                    <?php include("../tiles/02-schedule.php")?>
                </div>
            </article>

            <article class="kennstDuSchon">
                <span class="title"> Kennst du schon ... ? </span>
                <div id="picture">
                     <?php include("../tiles/semGall.html")?>
                </div>
            </article>
            <article class="kurzelKai">
                <span class="title"> Kürzel Kai </span>
                <div>
                <?php include("../tiles/06-kürzelkai.php")?>
                </div>
            </article>
            <article class="importantNews">
                <span class="title"> Wichtige Meldungen </span>
                <div>
                    <?php include("../tiles/01-official-news.php")?>
                </div>
            </article>

        <article class="sbar">
            <span class="title"> S Bar Menü </span>
            <div>

            </div>
        </article>
        <article class="mensa">
            <span class="title"> Mensa Menü </span>
            <div> Lorem Ipsum dolor set ....... </div>
        </article>
        <article class="calendar">
             <div id="calendar"></div>
        </article>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../scripts/jquery-ui-datepicker.min.js"></script>

    <script>
        $('#calendar').datepicker({
            inline: true,
            firstDay: 1,
            showOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
    </script>

        <script src="foundation-6/js/vendor/jquery.js"></script>
        <script src="foundation-6/js/vendor/what-input.js"></script>
        <script src="foundation-6/js/vendor/foundation.js"></script>
        <script src="foundation-6/js/app.js"></script>
</body>
</html>