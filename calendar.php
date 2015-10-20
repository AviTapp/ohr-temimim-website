<!DOCTYPE html>
<html>
    <head>
        <meta name="google-site-verification" content="Z0k_u40KDCh_muA7LEApVifcTt4ieQNcYcgZ6-9mTwQ" />
        <title>Academic Calendar</title>
        <link rel="stylesheet" type="text/css" href="css/personal.css?version=1.01">
        <link rel="shortcut icon" href="favicon.ico">
        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script></head>
    <body>
        <div class="content">
<!--Start Navigation-->
            <div class="nav home">
                <img src="img/logo.png" class="logo">
                <h1><a href="index.html">Home</a></h1>
            </div>
            <div class="nav">    <h1><a href="photos.html">Photos</a></h1></div>
            <div class="nav">    <h1><a href="forms.html">Forms</a></h1></div>
            <div class="nav">    <h1><a href="contact.html">Contact</a></h1></div>
            <!--div class="nav">    <h1><a href="calendar.html">Calendar</a></h1></div-->
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="QCXXG59UXZAF4">
                <input class="paypal" type="image" src="img/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>
<!--End Navigation-->
            <img class="attentionImg hidden" src="img/promo.png" alt="Open House Invitation">
            <div class="focus mission">Ohr Temimim School infuses its students with a traditional Jewish education, comprehensive in scope, while simultaneously incorporating an exceptional general studies program. The school's well-rounded dual curriculum, with emphasis on character development, provides a rich learning experience for<br>pre-school through eighth grade students.</div>
<!--Start Testing-->
<?php

function build_calendar($month,$year) {

    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('S','M','T','W','T','F','S');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers

    $calendar = "<table class='calendar'>";
    $calendar .= "<caption>$monthName $year</caption>";
    $calendar .= "<tr>";

    // Create the calendar headers

    foreach($daysOfWeek as $day) {
         $calendar .= "<th class='header'>$day</th>";
    }

    // Create the rest of the calendar

    // Initiate the day counter, starting with the 1st.

    $currentDay = 1;

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) {
         $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

         // Seventh column (Saturday) reached. Start a new row.

         if ($dayOfWeek == 7) {

              $dayOfWeek = 0;
              $calendar .= "</tr><tr>";

         }

         $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

         $date = "$year-$month-$currentDayRel";

         $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

         // Increment counters

         $currentDay++;
         $dayOfWeek++;

    }

    // Complete the row of the last week in month, if necessary

    if ($dayOfWeek != 7) {

         $remainingDays = 7 - $dayOfWeek;
         $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";

    }

    $calendar .= "</tr>";

    $calendar .= "</table>";

    return $calendar;

}

?>
<div>
	<?php echo build_calendar(09,2014); ?>
	<?php echo build_calendar(10,2014); ?>
	<?php echo build_calendar(11,2014); ?>
</div>
<!--End Testing-->
<!--Start Slideshow-->
            <!--section id="dg-container" class="dg-container">
                <div class="dg-wrapper">
                    <a href="img/5774openhouse001.png" target="_blank"><img src="img/5774openhouse001slide.png" alt="null"><div><p>Welcome board designed by our 6-8th grade girls</p></div></a>
                </div>
                <nav>    
                    <span class="dg-prev">&lt;</span>
                    <span class="dg-next">&gt;</span>
                </nav>
            </section-->
<!--End Slideshow-->
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.gallery.js"></script>
        <script type="text/javascript">$(function() {$('#dg-container').gallery({});});</script>
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51174973-1', 'ohrtemimimschool.com');ga('require', 'displayfeatures');ga('send', 'pageview');</script>
    </body>
</html>