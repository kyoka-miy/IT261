<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator php form</title>
    <link rel="stylesheet" href="css/calculator.css">
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label for="">NAME</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label for="">Total miles driving?</label>
            <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
            <label for="">How fast do you typically drive?</label>
            <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">
            <label for="">How many hours per day do you plan on driving?</label>
            <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">

            <label for="">Price of gas</label>
            <ul>
                <li>
                    <input type="radio" name="price" value="3.00" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked = "checked"'; ?>> $3.00
                </li>
                <li>
                    <input type="radio" name="price" value="3.50" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked = "checked"'; ?>> $3.50
                </li>
                <li>
                    <input type="radio" name="price" value="4.00" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked = "checked"'; ?>> $4.00
                </li>
            </ul>

            <label for="">Fuel efficiency</label>
            <select name="fuel" id="">
                <option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected"'; ?>>Select one!</option>
                <option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected = "selected"'; ?>>Terrible @ 10mpg</option>
                <option value="20" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected = "selected"'; ?>>Bad @ 20mpg</option>
                <option value="30" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected = "selected"'; ?>>Good @ 30mpg</option>
                <option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected = "selected"'; ?>>Great @ 40mpg</option>
                <option value="50" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '50') echo 'selected = "selected"'; ?>>Excellent @ 50mpg</option>
            </select>

            <input type="submit" value="Calculate">
            <p><a href="">Reset it!</a></p>
        </fieldset>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name!</p>';
    }
    if(empty($_POST['miles'])) {
        echo '<p class="error">Please fill out your total driving miles!</p>';
    }
    if(empty($_POST['speed'])) {
        echo '<p class="error">Please fill out how fast will you be driving!</p>';
    }
    if(empty($_POST['hours'])) {
        echo '<p class="error">How many hours per day would you like to drive?</p>';
    }
    if(empty($_POST['price'])) {
        echo '<p class="error">Your cost of gas, please!</p>';
    }
    if($_POST['fuel'] == NULL) {
        echo '<p class="error">Please select your car\'s efficiency!</p>';
    }

    if(isset($_POST['name'], $_POST['miles'], $_POST['speed'], $_POST['hours'], $_POST['price'], $_POST['fuel'])) {
        $name = $_POST['name'];
        $miles = floatval($_POST['miles']);
        $speed = floatval($_POST['speed']);
        $hours = floatval($_POST['hours']);
        $price = $_POST['price'];
        $fuel = floatval($_POST['fuel']);
        if($speed != 0 && $hours != 0 && $fuel != 0) {
            $totalHours = $miles / $speed;
            $days = $totalHours / $hours;
            $gas = $miles / $fuel;
            $dollars = $price * $gas;
        }

        if(!empty($name && $miles && $speed && $hours && $price && $fuel)) {

            echo '
                <div class="box">
                    <h2>Hello  '.$name.'</h2>
                    <p>You will be travelling a total of <b>'.number_format($totalHours, 2).' hours, taking '.number_format($days, 2).' days.</p>
                    <p>And, you will be using '.$gas.' gallons of gas, costing you $ '.$dollars.'</p>
                </div>
            ';
        }

    }
}
?>
    </form>
</body>
</html>


