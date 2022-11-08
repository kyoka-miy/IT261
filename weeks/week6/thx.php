<?php 

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$wines = '';
$gender = '';
$regions = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$gender_err = '';
$regions_err = '';
$privacy_err = '';
$comments_err = '';
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
    if(empty($_POST['gender'])) {
        $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }
    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
    } else {
        $phone = $_POST['phone'];
    }
    if(empty($_POST['wines'])) {
        $wines_err = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    }
    if(empty($_POST['comments'])) {
        $comments_err = 'Please share your thoughts with us';
    } else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to our privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    }
    if(empty($_POST['regions'])) {
        $regions_err = 'Please select your region!';
    } else {
        $regions = $_POST['regions'];
    }

    function my_wines($wines) {
        $my_return = '';

        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_err = 'Please fill out your wines!';
        }

        return $my_return;
    }

    if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['phone'], $_POST['wines'],$_POST['regions'],$_POST['comments'],$_POST['privacy'])) {
        $to = 'kyoka.miyamura@seattlecolleges.edu';
        $subject = 'Test Email on ' .date('m/d/y, h i A');
        $body = '
            First Name : '.$first_name.'  '.PHP_EOL.'
            Last Name : '.$last_name.'  '.PHP_EOL.'
            Email : '.$email.'  '.PHP_EOL.'
            Gender : '.$gender.'  '.PHP_EOL.'
            Phone : '.$phone.'  '.PHP_EOL.'
            Region : '.$regions.'  '.PHP_EOL.'
            Wines : '.$regions.'  '.PHP_EOL.'
            Comments : '.$comments.'  '.PHP_EOL.'
        ';

        $headers = array (
            'From' => 'noreply@mystudentswa.com'
        );

        if(!empty($first_name && $last_name && $email && $gender && $phone && $regions && $wines && $comments)) {

            mail($to, $subject, $body);
            header('Location: thx.php');
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you page!</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Thank you for filling out our form!</h1>
</body>
</html>