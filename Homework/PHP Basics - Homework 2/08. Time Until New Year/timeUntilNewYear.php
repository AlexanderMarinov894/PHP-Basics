<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>New Year Countdown</title>
    <link rel="stylesheet" href="css/style.css"/>
    <!-- <script src="js/jquery-1.11.1.js"></script>
    <script src="js/reloadPage.js"></script>
    I used jQuery for reloading the section element every second but the page takes too much system resources and
    after some time runs very slowly. I'll be happy to get feedback!
    -->
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Sofia');
    $now = new DateTime();
    $newYear = new DateTime("2015-01-01 00:00:00");
    $diff = $now->diff($newYear);

    $secondsLeft = ($diff->m*2628000) + ($diff->d*86400) + ($diff->h*3600) + ($diff->i)*60 + $diff->s;
    $minutesLeft = ($diff->m*43800) + ($diff->d*1440) + ($diff->h*60) + $diff->i;
    $hoursLeft = ($diff->m*730) + ($diff->d*24) + $diff->h;
    ?>

    <main>
        <section>
            <p id="counter""><?=$diff->m?> months, <?=$diff->d?> days, <?=$diff->h?> hours, <?=$diff->i?> minutes, <?=$diff->s?> seconds</p>
            <p class="time" id="seconds"><?=$secondsLeft?> seconds,</p>
            <p class="time" id="minutes"><?=$minutesLeft?> minutes,</p>
            <p class="time" id="hours"><?=$hoursLeft?> hours</p>
        </section>
    </main>
</body>
</html>
