<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Celcius Form Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <label for="">Enter your celcius value</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert it!">
        </fieldset>
        <p><a href="">Reset</a></p>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                $cel_int = intval($cel);
                $far = ($cel_int * 9/5) +32;

                if($cel == NULL) {
                    echo '<p>Please fill out the Celcius Value!</p>';
                } elseif($cel <= 32) {
                    echo '<p> '.$cel_int.' degrees celcius equals   '.$far.' degrees fahrenheit <br> and it is pretty cold out there!  </p>';
                } elseif($cel <= 45) {
                    echo '<p> '.$cel_int.' degrees celcius equals   '.$far.' degrees fahrenheit <br> and it is getting warmer!  </p>';
                } elseif($cel <= 60) {
                    echo '<p> '.$cel_int.' degrees celcius equals   '.$far.' degrees fahrenheit <br> and it is sweater weather!  </p>';
                } elseif($cel <= 75) {
                    echo '<p> '.$cel_int.' degrees celcius equals   '.$far.' degrees fahrenheit <br> and we are going to the park!  </p>';
                } elseif($cel <= 90) {
                    echo '<p> '.$cel_int.' degrees celcius equals   '.$far.' degrees fahrenheit <br> and we are at the beach!  </p>';
                }
            }
        }
    ?>
</body>
</html>