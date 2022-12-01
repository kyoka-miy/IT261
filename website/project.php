<?php
include ('config.php');
include ('./includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to our Disney Database Class Exercise!</h1>
<?php
$sql = 'SELECT * FROM disney';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <h2>Information about: '.$row['name'].'</h2>
            <ul>
                <li><b>First Name</b> '.$row['name'].'</li>
                <li><b>Birth Date</b> '.$row['birthdate'].'</li>
            </ul>
            <p>For more information about '.$row['name'].', click <a href="project-view.php?id='.$row['disney_id'].' ">here</a> </p>
        ';
    }
} else {
    echo 'Nobody is home!';
}

@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</main>
<aside>
    
</aside>

</div>
<?php
 include('./includes/footer.php');
?>