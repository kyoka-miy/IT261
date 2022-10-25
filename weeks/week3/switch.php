<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday';
    $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso.</p>';
    break;
    case 'Saturday';
    $coffee = '<h2>Saturday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso.</p>';
    break;
    case 'Sunday';
    $coffee = '<h2>Sunday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso.</p>';
    break;
    case 'Monday';
    $coffee = '<h2>Monday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso.</p>';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
   <div id = 'wrapper'>
        <h1>My Wonderful Switch Classwork Exercise</h1>
        <?php echo $coffee; ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>
        <h2>Check out our Daily Specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div> 

</body>
</html>