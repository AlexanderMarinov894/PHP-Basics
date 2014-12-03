<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lazy Sundays</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <p id="title">All the Sundays in November are:</p>
    <ul>
        <?php
        for ($day = 1; $day <= 30; $day++) {
            if ($day < 10) {
                $date = new DateTime("0${day}-11-2014");
            } else {
                $date = new DateTime("${day}-11-2014");
            }
            $dateFormat = $date->format('d-m-Y');
            $dayOfWeek = trim(date("\nD\n",strtotime($dateFormat,1)));
        ?>

        <?php if ($dayOfWeek == 'Sun') { ?>
            <li><?=$dateFormat?></li>
        <?php
                }
        }
        ?>
    </ul>
</body>
</html>