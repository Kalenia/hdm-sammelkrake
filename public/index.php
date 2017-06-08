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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../style/Calendar.css" media="screen">

    <script src="scripts/jquery.js"></script>
    	<script src="scripts/jquery.grid.js"></script>
    	<script>
    		$(document).ready(function(){
    			$(window).resize(function(){
    				$('section').grid({ 'cell-width': 145, 'cell-height': 200, 'cell-spacing': 10 })//.triggerHandler('debug');
    			});
    			$(window).resize();
    		});
    	</script>
</head>
<body>

    <div class="wrapper">
        <aside>
            <div class="icon-bar">
                <img class="menubild" src="imgs/tintenfisch.png" alt="menubild">
                <a class="active" href="#">
                    <i class="fa fa-home"> Home</i></a>
                <a href="#"><i class="fa fa-info-circle"> About</i></a>
                <a href="#"><i class="fa fa-address-card"> Contact</i></a>
            </div>
        </aside>

            <article class="offWorkingStuff">
                <span class="title"> Offizielles Arbeitsmaterial </span>
                <div>
                    <?php include("../tiles/ideas/03-official-working-stuff.php")?>
                </div>
            </article>
            <article class="officialNews">
                <span class="title"> Offizielle News </span>
                <div>
                    <?php include("../tiles/01-official-news.php")?>
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
                     <?php include("../tiles/gallery.html")?>
                </div>
                <div id="name">
                    Ludwig Kösling
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
            <span class="title"> Kalender </span>
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
</body>
</html>