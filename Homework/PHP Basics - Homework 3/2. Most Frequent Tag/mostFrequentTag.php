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
    $input = trim(str_replace(',', ' ', $input));
    $input = preg_split("/[ ]+/", htmlentities($input));
    $input = array_count_values($input);
    arsort($input);

    echo('<section id="result">');
    $isNotChecked = false;
    foreach ($input as $key => $value) {
        if ($isNotChecked == false) {
            $mostFreq = 'The most frequent tag is: '.$key.' ('.$value.' times).';
        }
        echo ('<p class="print">'.$key.': '.$value.' times'.'</p>');
        $isNotChecked = true;
    }
    echo ('<p id="most-frequent">'.$mostFreq.'</p>');
    echo ('</section>');
}
?>

</body>
</html>