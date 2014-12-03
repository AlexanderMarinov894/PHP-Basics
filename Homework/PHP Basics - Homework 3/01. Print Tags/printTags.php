<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Print Tags</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <form id="input-form" action="" method="get">
        <p>Enter tags in the format <em>tag1, tag2, tag3...etc.</em></p>
        <input id="tags" type="text" name="inputs"/>
        <input id="button" type="submit" value="Submit"/>
    </form>

    <?php
    if(isset($_GET['inputs'])) {
        $input = $_GET['inputs'];
        $input = preg_split("/, /", htmlentities($input));

        echo('<section id="result">');
        if (count($input) > 1) {
            $counter = 0;
            foreach($input as $word) {
                echo ('<p class="print">'.$counter.': '.$word.'</p>');
                $counter++;
            }
        } elseif (count($input) == 1 && $input[0] != '') {
            $counter = 0;
            echo ('<p class="print">'.$counter.': '.$input[0].'</p>');
        } elseif (count($input) == 1 && $input[0] == '') {
            echo ('<p class="print">'.'No words!'.'</p>');
        }
        echo ('</section>');
    }
    ?>

</body>
</html>