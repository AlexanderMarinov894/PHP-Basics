<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Form</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <main>
        <form id="register" action="" method="get">
            <section id="name">
                <input type="text" name="name" placeholder="Name" required/>
            </section>
            <section id="details">
            <input id="age" type="number" name="age" placeholder="Age" min="0" max="150" required/>
                    <input class="selection" type="radio" name="gender" required value="male"> <span class="label">Male</span>
                    <input class="selection" type="radio" name="gender" required value="female"> <span class="label">Female</span>
            </section>
            <section id="send">
                <input type="submit" value="Send"/>
            </section>
        </form>
    </main>

    <?php
    if (isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);
        $age = htmlentities($_GET['age']);
        $gender = htmlentities($_GET['gender']); ?>

        <section>
            <p id="print">My name is <?=$name?>. I am <?=$age?> years old. I am <?=$gender?>.</p>
        </section>

    <?php
    }
    ?>
</body>
</html>