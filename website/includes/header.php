
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="<?php echo $body; ?>" style="background-color: <?php echo $color; ?>">
    <header>
        <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images/IMG_4442.jpg" alt="logo">
            </a>

            <!-- <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav> -->

            <nav>
                <ul>
                    <?php 
                        echo make_links($nav);
                    ?>
                </ul>
            </nav>
        </div>
    </header>