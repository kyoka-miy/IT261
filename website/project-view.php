<?php
include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

$sql = 'SELECT * FROM disney WHERE disney_id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $name = stripslashes($row['name']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $details = stripslashes($row['details']);
        $feedback = '';
    }
} else {
    $feedback = 'There is a problem!';
}

include('./includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1>Welcome to our Disney View Page!</h1>
        <h2>Introducing you to <?php echo $name; ?></h2>
        <ul>
            <?php 
                echo '
                <li><b>Name</b> '.$name.'</li>
                <li><b>Email</b> '.$email.'</li>
                <li><b>Birth Date</b> '.$birthdate.'</li>
                <li><b>Occupation</b> '.$occupation.'</li>
                ';
            ?>
        </ul>
        <p><a href="project.php">Return to the Disney page!</a></p>
    </main>
    <aside>
        <h3>This is my Aside</h3>
        <figure>
            <img src="./images/disney<?php echo $id; ?>.jpeg" alt="<?php echo $name; ?>">
            <figcaption>
                <?php 
                    echo '
                        '.$name.', '.$occupation.'
                    ';
                ?>
            </figcaption>
        </figure>
        <p><i><?php echo $details; ?></i></p>
    </aside>
    <?php
        @mysqli_free_result($result);
        @mysqli_close($iConn);
    ?>
</div>

<?php include('./includes/footer.php'); ?>