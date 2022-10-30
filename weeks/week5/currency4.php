<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 php form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label for="">NAME</label>
            <input type="text" name="name">
            <label for="">EMAIL</label>
            <input type="email" name="email">
            <label for="">How much money do you have?</label>
            <input type="number" name="amount">

            <label for="">Choose your currency</label>
            <ul>
                <li>
                    <input type="radio" name="currency" value="0.017"> Rubies
                </li>
                <li>
                    <input type="radio" name="currency" value="0.76"> Canadian Dollars
                </li>
                <li>
                    <input type="radio" name="currency" value="1.15"> Pounds
                </li>
                <li>
                    <input type="radio" name="currency" value="1.00"> Euros
                </li>
                <li>
                    <input type="radio" name="currency" value="0.0074"> Yeb
                </li>
            </ul>

            <label for="">Choose your banking institution</label>
            <select name="bank" id="">
                <option value="" NULL>Select one!</option>
                <option value="boa">Bank of America</option>
                <option value="chase">Chase Bank</option>
                <option value="banner">Banner Bank</option>
                <option value="wells">Wells Fargo</option>
                <option value="becu">Boeing Credit Union</option>
            </select>

            <input type="submit" value="Convert it">
            <p><a href="">Reset it!</a></p>
        </fieldset>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name!</p>';
    }
    if(empty($_POST['email'])) {
        echo '<p class="error">Please fill out your email!</p>';
    }
    if(empty($_POST['amount'])) {
        echo '<p class="error">Please fill out your amount!</p>';
    }
    if(empty($_POST['currency'])) {
        echo '<p class="error">Please fill out your currency!</p>';
    }
    if($_POST['bank'] == NULL) {
        echo '<p class="error">Please choose your banking institution!</p>';
    }

    if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $dollars = $amount * $currency;

        echo '
            <div class="box">
                <h2>Hello  '.$name.'</h2>
                <p>You now have  '.floor($dollars).' American dollars and we will be emailing you at <b>'.$email.'</b> with your information,
                as well as depositing your funds at <b>'.$bank.'</b>!</p>
            </div>
        ';

        if(floor($dollars) >= 1000) {
            echo '
                <div class="video happy">
                    <p>I am REALLY happy, because I have '.floor($dollars).' American dollars!</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3PHXvlpOkf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            ';
        } elseif (floor($dollars) < 1000) {
            echo '
                <div class="video notHappy">
                    <p>I am NOT happy, because I have '.floor($dollars).' American dollars!</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Hj_rA0dhr2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            ';
        }
    }
}
?>
    </form>
</body>
</html>


