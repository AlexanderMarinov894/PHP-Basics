<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculate Interest</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header>
        <p id="title">Compound Interest Calculator</p>
    </header>
    <section>
        <form id="interest-form" action="" method="post">
            <label for="amount">
                 <span class="label">Amount:</span> <input class="input-value" type="text" name="amount"/>
            </label>
            <label id="currency" for="currency" required>
                USD<input type="radio" name="currency" value="USD"/>
                EUR<input type="radio" name="currency" value="EUR"/>
                BGN<input type="radio" name="currency" value="BGN"/>
            </label>
            <label id="interest" for="interest">
                <span class="label">Interest (%):</span> <input class="input-value" type="text" name="interest"/>
            </label>
            <label id="period" for="period">
                <select name="period" id="period" class="selection" required>
                    <option value="6">6 Months</option>
                    <option value="12">1 Year</option>
                    <option value="24">2 Years</option>
                    <option value="60">5 Years</option>
                </select>
                <input id="button" type="submit" name="submit" value="Calculate"/>
            </label>
            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['amount']) && isset($_POST['currency'])) {
                    $amount = htmlentities($_POST['amount']);
                    $currency = htmlentities($_POST['currency']);
                    $interest = htmlentities($_POST['interest']);
                    $period = htmlentities($_POST['period']);

                    $interest = str_replace('%', '', $interest);
                    $period = intval($period);

                    if (is_numeric($amount) && is_numeric($interest)) {
                        if (strpos($amount, '.')) {
                            $amount = floatval($amount);
                        } else {
                            $amount = intval($amount);
                        }

                        if (strpos($interest, '.')) {
                            $interest = floatval($interest);
                        } else {
                            $interest = intval($interest);
                        }

                        $interestPerMonth = $interest / 12;
                        $totalSum = $amount;

                        for ($month = 1; $month <= $period; $month++) {
                            $totalSum *= (100 + $interestPerMonth) / 100;
                        }

                        $result = '';
                        if ($currency == 'USD') {
                            $result = '$ ' . round($totalSum, 2);
                        } elseif ($currency == 'EUR') {
                            $result = round($totalSum, 2) . ' €';
                        } else {
                            $result = round($totalSum, 2) . ' BGN';
                        }
                        echo("<textarea id='result' disabled>" . $result . "</textarea>");
                    } else {
                        die ("<textarea id='result-err' disabled>Wrong value!</textarea>");
                    }
                } else {
                    echo("<textarea id='result-err' disabled>Fill all required fields!</textarea>");
                }
            }
            ?>
        </form>
    </section>
</body>
</html>