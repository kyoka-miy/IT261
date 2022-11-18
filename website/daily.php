<?php 
include('config.php');
include('./includes/header.php'); ?>

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
<?php include('./includes/footer.php'); ?>