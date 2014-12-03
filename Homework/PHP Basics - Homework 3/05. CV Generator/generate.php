<?php
include 'header.php';
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $nationality = $_POST['nationality'];
    $company = $_POST['company'];
    $startDate = $_POST['from'];
    $endDate = $_POST['to'];
    $compSkills = $_POST['compSkills'];
    $compLevel = $_POST['level'];
    $otherSkills = $_POST['otherSkills'];
    $comprehension = $_POST['comprehension'];
    $reading = $_POST['reading'];
    $writing = $_POST['writing'];
    if (isset($_POST['license'])) {
        $license = $_POST['license'];
    } else {
        die ('<p class="error">ERROR: You must have a driving license!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }

    if (!(strlen(htmlentities($firstName)) >= 2 && strlen(htmlentities($firstName)) <= 20)
        || preg_match('/[^A-Za-z]/', htmlentities($firstName))
    ) {
        die ('<p class="error">ERROR: Enter correct first name!</p><p class="go-back">'.
             '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if (!(strlen(htmlentities($lastName)) >= 2 && strlen(htmlentities($lastName)) <= 20)
        || preg_match('/[^A-Za-z]/', htmlentities($lastName))
    ) {
        die ('<p class="error">ERROR: Enter correct last name!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if (!filter_var(htmlentities($email), FILTER_VALIDATE_EMAIL)) {
        die ('<p class="error">ERROR: Enter correct email address!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if ((preg_match('/[a-zA-Z!@#$%^&*()_{}\|;:,.?`=]+/', htmlentities($phone)))) {
        die ('<p class="error">ERROR: Enter correct phone number!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if (!(strlen(htmlentities($company)) >= 2 && strlen(htmlentities($company)) <= 20)
        || preg_match('/[^A-Za-z0-9 ]/', htmlentities($company))
    ) {
        die ('<p class="error">ERROR: Enter correct company name!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if (!htmlentities($compSkills[0]) && !(strlen(htmlentities($compSkills[0])) >= 2 && strlen(htmlentities($compSkills[0])) <= 20)) {
        die ('<p class="error">ERROR: Enter correct programming language!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }
    if (!htmlentities($otherSkills[0]) && !(strlen(htmlentities($otherSkills[0])) >= 2 && strlen(htmlentities($otherSkills[0])) <= 20)
        || preg_match('/[^A-Za-z]/', $otherSkills[0])
    ) {
        die ('<p class="error">ERROR: Enter correct language!</p><p class="go-back">'.
            '<a href="CVGenerator.php"><input type="button" class="go-back" value="GO BACK!"></a></p>');
    }

?>
    <div id="cv" onmousedown='return false;'>
        <p id="document-title">Curriculum Vitae</p>

        <div id="cv-personal">
            <table id="result-personal">
                <tr>
                    <th colspan="2" class="title">Personal Information</th>
                </tr>
                <tr>
                    <td class="table-const">First Name:</td>
                    <td><?php echo($firstName); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Last Name:</td>
                    <td><?php echo($lastName); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Email:</td>
                    <td><?php echo($email); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Phone Number:</td>
                    <td><?php echo($phone); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Gender:</td>
                    <td><?php echo($gender); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Birth Date:</td>
                    <td><?php echo($birthDate); ?></td>
                </tr>
                <tr>
                    <td class="table-const">Nationality:</td>
                    <td><?php echo($nationality); ?></td>
                </tr>
            </table>
        </div>

        <div id="cv-last">
            <table>
                <tr>
                    <th colspan="2" class="title">Last Work Position</th>
                </tr>
                <tr>
                    <td class="table-const">Company Name:</td>
                    <td><?php echo($company); ?></td>
                </tr>
                <tr>
                    <td class="table-const">From:</td>
                    <td><?php echo($startDate); ?></td>
                </tr>
                <tr>
                    <td class="table-const">To:</td>
                    <td><?php echo($endDate); ?></td>
                </tr>
            </table>
        </div>

        <div id="cv-comp-skills">
            <table>
                <tr>
                    <th colspan="2" class="title">Computer Skills</th>
                </tr>
                <tr>
                    <td class="table-const">Programing Languages:</td>
                    <td>
                        <table>
                            <tr>
                                <th class="inner-table-head">Language</th>
                                <th class="inner-table-head">Level</th>
                            </tr>

                            <?php
                            $index = 0;
                            foreach ($compSkills as $language) {
                                echo('<tr class="inner-table"><td class="inner-table">' . $language . '</td>' . '<td class="inner-table level">' . $compLevel[$index] . '</td></tr>');
                                $index++;
                            }
                            ?>

                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div id="cv-other-skills">
            <table>
                <tr>
                    <th colspan="2" class="title">Other Skills</th>
                </tr>
                <tr>
                    <td class="table-const">Languages:</td>
                    <td>
                        <table>
                            <tr>
                                <th class="inner-table-head">Language</th>
                                <th class="inner-table-head">Comprehension</th>
                                <th class="inner-table-head">Reading</th>
                                <th class="inner-table-head">Writing</th>
                            </tr>

                            <?php
                            $index = 0;
                            foreach ($otherSkills as $language) {
                                echo('<tr class="inner-table"><td class="inner-table">' . $language .
                                    '</td><td class="inner-table level">' . $comprehension[$index] .
                                    '</td><td class="inner-table level">' . $reading[$index] .
                                    '</td><td class="inner-table level">' . $writing[$index] .
                                    '</td></tr>');
                                $index++;
                            }
                            ?>

                        </table>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Driver's License:</td>
                    <td>
                        <?php
                        $printLicense = '';
                        foreach ($license as $letter) {
                            $printLicense .= $letter . ', ';
                        }
                        echo rtrim($printLicense, ", ");
                        ?>
                    </td>
                </tr>
                </tr>
            </table>
        </div>
    </div>

<?php
} else {
    die ('<p class="error">ERROR: You do not have access to this page</p>');
}
include 'footer.php';
?>