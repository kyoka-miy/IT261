<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday';
    $color = 'lightblue';
    $food = '<h2>Friday is Pumpkin Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin';
    $content = '<p><b>Pumpkin</b> is perfect for Halloween! Kabocha is also available! You can do pumpkin curving too.</p>';
    break;
    case 'Saturday';
    $color = 'lightcoral';
    $food = '<h2>Saturday is Egg Day!</h2>';
    $pic = 'egg.jpg';
    $alt = 'egg';
    $content = '<p><b>Egg</b> is perfect for breakfast and dinner!</p>';
    break;
    case 'Sunday';
    $color = 'lightcyan';
    $food = '<h2>Sunday is Beef Day!</h2>';
    $pic = 'beef.jpg';
    $alt = 'beef';
    $content = '<p><b>Beef</b> is Wagyu, the fanciest one we prepare for you!</p>';
    break;
    case 'Monday';
    $color = 'lightgoldenrodyellow';
    $food = '<h2>Monday is Spinach Day!</h2>';
    $pic = 'spinach.jpg';
    $alt = 'spinach';
    $content = '<p><b>Spinach</b> good with stew, curry, and an egg!</p>';
    break;
    case 'Tuesday';
    $color = 'lightpink';
    $food = '<h2>Tuesday is Tomato Day!</h2>';
    $pic = 'tomato.jpg';
    $alt = 'tomato';
    $content = '<p><b>Tomato</b> good for stir, stew, raw, bit sour taste!</p>';
    break;
    case 'Wednesday';
    $color = 'lightgray';
    $food = '<h2>Wednesday is Avocado Day!</h2>';
    $pic = 'avocado.jpg';
    $alt = 'avocado';
    $content = '<p><b>Avocado</b> creamy and so good for your health. Perfect with salad!</p>';
    break;
    case 'Thursday';
    $color = 'lightsalmon';
    $food = '<h2>Thursday is Carrot Day!</h2>';
    $pic = 'carrot.jpg';
    $alt = 'carrot';
    $content = '<p><b>Carrot</b> dice and put it in stir, stew, soup!</p>';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Weekly Sale</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            
        }
        #wrapper {
            max-width:940px;
            padding:0 80px;
            margin: 20px auto;
        }
        header {
            background-color: skyblue;
            margin-top: 0;
            padding: 20px 0;
        }
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-inner h1 {
            color: green;
        }
        .header-inner ul {
            display: flex;
        }
        .header-inner li {
            display:inline-block;
            margin-left: 10px;
        }
        .header-inner a {
            display:inline-block;
            color: #000;
            text-decoration: none;
        }
        .content {
            text-align: center;
        }
        .content li {
            list-style: none;
        }
        .content h2 {
            margin-top: 60px;
            margin-bottom: 20px;
        }
        .content h1 {
            margin-bottom: 20px;
        }
        .content img {
            max-width: 100%;
            object-fit: contain;
            height:200px;
        }
        footer {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid #eee;
            margin-top:150px;
        }
    </style>
</head>
<body style="background-color: <?php echo $color; ?>">
    <header>
        <div id ='wrapper' class="header-inner">
            <h1>PHP</h1>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="#">Daily</a></li>
                    <li><a href="">Cake</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav>
        </div>
    </header>
   <div id = 'wrapper' class="content">
        <h1>FRESCO WEEKLY SALE!</h1>
        <img src="../images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $food; ?>
        <?php echo $content; ?>
        <h2>Check out our Daily Sales!</h2>
        <ul>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>
    </div> 
    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Kyoka Miyamura</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            <li><a href="https://github.com/kyoka-miy/IT261-switch-HW3">GitHub</a></li>
        </ul>

        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

    </footer>
</body>
</html>