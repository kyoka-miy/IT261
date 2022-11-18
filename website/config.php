<?php

ob_start();

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    switch(THIS_PAGE) {
        case 'index.php':
            $title = 'Home page';
            $body = 'home';
        break;
        case 'about.php':
            $title = 'About page';
            $body = 'about inner';
        break;
        case 'daily.php':
            $title = 'Daily page';
            $body = 'daily inner';
        break;
        case 'project.php':
            $title = 'Project page';
            $body = 'project inner';
        break;
        case 'contact.php':
            $title = 'Contact page';
            $body = 'contact inner';
        break;
        case 'gallery.php':
            $title = 'Gallery page';
            $body = 'gallery inner';
        break;
    }
    $nav = array (
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'project.php' => 'Project',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery',
    );

    function make_links($nav) {
        $my_return = '';
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                $my_return .= '<li><a class="current" href="' .$key.'">'.$value.'</a> </li>';
            } else {
                $my_return .= '<li><a href="'.$key.'">'.$value.'</a> </li>';
            }
        }
        return $my_return;
    }
    
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

    $first_name = '';
    $last_name = '';
    $email = '';
    $phone = '';
    $age = '';
    $foods = '';
    $privacy = '';
    $first_name_err = '';
    $last_name_err = '';
    $email_err = '';
    $phone_err = '';
    $age_err = '';
    $foods_err = '';
    $privacy_err = '';
    ob_start();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['first_name'])) {
            $first_name_err = 'Please fill out your first name';
        } else {
            $first_name = $_POST['first_name'];
        }
        if(empty($_POST['last_name'])) {
            $last_name_err = 'Please fill out your first name';
        } else {
            $last_name = $_POST['last_name'];
        }
        if(empty($_POST['email'])) {
            $email_err = 'Please fill out your email';
        } else {
            $email = $_POST['email'];
        }
        if(empty($_POST['age'])) {
            $age_err = 'Please choose your age';
        } else {
            $age = $_POST['age'];
        }
        // if(empty($_POST['phone'])) {
        //     $phone_err = 'Please fill out your phone number';
        // } else {
        //     $phone = $_POST['phone'];
        // }
    
        if(empty($_POST['phone'])) {
            $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)) {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
                $phone_err = 'Invalid format!';
            } else {
                $phone = $_POST['phone'];
            }
        }
    
        if(empty($_POST['foods'])) {
            $foods_err = 'What, no foods?';
        } else {
            $foods = $_POST['foods'];
        }
        
        if(empty($_POST['privacy'])) {
            $privacy_err = 'Please agree to our privacy policy';
        } else {
            $privacy = $_POST['privacy'];
        }
    
        function my_foods($foods) {
            $my_return = '';
    
            if(!empty($_POST['foods'])) {
                $my_return = implode(', ', $_POST['foods']);
            } else {
                $foods_err = 'Please fill out your foods!';
            }
    
            return $my_return;
        }
    
        if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['age'], $_POST['phone'], $_POST['foods'], $_POST['privacy'])) {
            $to = 'szemeo@mystudentswa.com';
            $subject = 'Test Email on ' .date('m/d/y, h i A');
            $body = '
                First Name : '.$first_name.'  '.PHP_EOL.'
                Last Name : '.$last_name.'  '.PHP_EOL.'
                Email : '.$email.'  '.PHP_EOL.'
                Age : '.$age.'  '.PHP_EOL.'
                Phone : '.$phone.'  '.PHP_EOL.'
                Foods : '.$foods.'  '.PHP_EOL.'
            ';
    
            $headers = array (
                'From' => 'noreply@mystudentswa.com'
            );
    
            if(!empty($first_name && $last_name && $email && $age && $phone && $foods)
            && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
    
                mail($to, $subject, $body);
                header('Location: thx.php');
            }
    
        }
    }

    $photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpeg';


function random_images($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpeg';
    $my_return = '<img src = "img/'.$selected_image.'" alt="'.$photos[$i].'" >';
    return $my_return;
}
