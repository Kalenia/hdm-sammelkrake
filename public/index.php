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
    <link rel="stylesheet" href="style/style.css">

    <!-- Add icon library -->
    <link rel="stylesheet" href="foundation-6/css/foundation.css">


    <link rel="stylesheet" href="../style/Calendar.css" media="screen">

    <link rel="stylesheet" href="../style/cardcss.css">

    <script src="scripts/jquery.js"></script>
    	<script src="scripts/jquery.grid.js"></script>

</head>
<body>

    <div class="wrapper">
        <article class="offWorkingStuff">
            <div class="card effect__click">
                <div class="card__front_WorkingStuff">
                </div>
                <div class="card__back_WorkingStuff">
                    <span class="card__text_WorkingStuff"> <?php include("../tiles/ideas/03-official-working-stuff.php")?></span>
                </div>
            </div><!-- /card -->
        </article>

        <article class="officialNews">
            <div class="card effect__click">
                <div class="card__front_officialNews">
                </div>
                <div class="card__back_officialNews">
                    <span class="card__text_officialNews">  <?php include("../tiles/ideas/04-official-infos.php")?></span>
                </div>
            </div><!-- /card -->
        </article>

        <article class="studentsStuff">
            <div class="card effect__click">
                <div class="card__front_studentsStuff">
                </div>
                <div class="card__back_studentsStuff">
                    <span class="card__text_studentsStuff">    <?php include("../tiles/12-studentsStuff.html")?></span>
                </div>
            </div><!-- /card -->
        </article>

        <article class="ownCloud">
              <div class="card effect__click">
               <div class="card__front_Owncloud">
               <a href="https://cloud.mi.hdm-stuttgart.de/index.php/s/02IcLpPaDYkCJqw" id="owncloud-background_link">Owncloud</a>
               </div>
               </div>
        </article>

        <article class="schedule">
            <div>
               <?php include("../tiles/02-schedule.php")?>
            </div>
        </article>

        <article class="kennstDuSchon">
            <div>
                <?php include("../tiles/11-semGalW3C.html")?>
            </div>
        </article>

         <article class="kürzelKai">
            <div>
                <?php include("../tiles/06-kürzelkai.php")?>
            </div>
         </article>

         <article class="importantNews">
            <div>
                <?php include("../tiles/01-official-news.php")?>
            </div>
         </article>

         <article class="sbar">
             <div class="card effect__click">
                <div class="card__front_SBar">
                    </div>
                        <div class="card__back_SBar">
                                <span class="card__text_SBar">
                                <p> Momentan Deaktiviert </p>
                                </span>
                         </div>
                </div><!-- /card -->
         </article>

        <article class="mensa">
            <div class="card effect__click">
                           <div class="card__front_mensa">
                               </div>
                                   <div class="card__back_mensa">
                                           <span class="card__text_mensa">
                                           <p> Momentan Deaktiviert </p>
                                           </span>
                                    </div>
                           </div><!-- /card -->
        </article>

        <article class="calendar">
             <div id="calendar"></div>
        </article>
    </div>

    <script src="foundation-6/js/vendor/what-input.js"></script>
    <script src="foundation-6/js/vendor/foundation.js"></script>
    <script src="foundation-6/js/app.js"></script>
    <script src="scripts/flip.js"></script>
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