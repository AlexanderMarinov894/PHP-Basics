<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Table</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <?php
    function contacts($name, $phone, $age, $address)
    {
    ?>
        <table class="contacts-table">
            <tr>
                <td class="label">Name</td>
                <td class="data"><?=$name?></td>
            </tr>
            <tr>
                <td class="label">Phone number</td>
                <td class="data"><?=$phone?></td>
            </tr>
            <tr>
                <td class="label">Age</td>
                <td class="data"><?=$age?></td>
            </tr>
            <tr>
                <td class="label">Address</td>
                <td class="data"><?=$address?></td>
            </tr></table>
    <?php
    }

    contacts('Gosho','0882-321-423','24','Hadji Dimitar');
    contacts('Pesho','0884-888-888','67','Suhata Reka');
    ?>
</body>
</html>