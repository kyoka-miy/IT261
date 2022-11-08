<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><a href="index.php">Kyoka's Portal Page</a></h1>
        <h2>The navigation below represents our BIG Assignments.</h2>
    </header>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
        <div class="content">

            <main>
                <h2>About Kyoka</h2>
                <p>Hi! I'm Kyoka, a CS student in Seattle Central College.</p>
                <p>I like hiking, cooking, programming and all activities!</p>
                <img src="images/face.jpg" alt="Kyoka's face" class="right">

                <div class="screenshots">
                    <img src="images/mamp.png" alt="">
                    <img src="images/error.png" alt="">
                </div>
            </main>
    
            <aside>
                <h2>Weekly Class Exercise</h2>
                <h3>Week 2</h3>
                <ol>
                    <li><a href="./weeks/week2/var.php">var.php</a></li>
                    <li><a href="./weeks/week2/var2.php">var2.php</a></li>
                    <li><a href="./weeks/week2/currency-logic.php">currency-logic.php</a></li>
                    <li><a href="https://github.com/kyoka-miy/IT261-week2">GitHub</a></li>
                </ol>
                <h3>Week 3</h3>
                <ol>
                    <li><a href="./weeks/week3/date.php">date.php</a></li>
                    <li><a href="./weeks/week3/for-each.php">for-each.php</a></li>
                    <li><a href="./weeks/week3/for-loop.php">for-loop.php</a></li>
                    <li><a href="./weeks/week3/if.php">if.php</a></li>
                    <li><a href="./weeks/week3/switch.php">switch.php</a></li>
                    <li><a href="./weeks/week3/about.php">about.php</a></li>
                    <li><a href="https://github.com/kyoka-miy/IT261-week3">GitHub</a></li>
                </ol>
                <h3>Week 4</h3>
                <ol>
                    <li><a href="./weeks/week4/form-get.php">form-get.php</a></li>
                    <li><a href="./weeks/week4/form1.php">form1.php</a></li>
                    <li><a href="./weeks/week4/form2.php">form2.php</a></li>
                    <li><a href="./weeks/week4/form3.php">form3.php</a></li>
                    <li><a href="./weeks/week4/celcius.php">celcius.php</a></li>
                    <li><a href="./weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                </ol>
                <h3>Week 5</h3>
                <ol>
                    <li><a href="./weeks/week5/currency1.php">currency1.php</a></li>
                    <li><a href="./weeks/week5/currency2.php">currency2.php</a></li>
                    <li><a href="./weeks/week5/currency3.php">currency3.php</a></li>
                    <li><a href="./weeks/week5/currency4.php">currency4.php</a></li>
                    <li><a href="./weeks/week5/null.php">null.php</a></li>
                </ol>
                <h3>Week 6</h3>
                <ol>
                    <li><a href="./weeks/week6/form.php">form.php</a></li>
                    <li><a href="./weeks/week6/form2.php">form2.php</a></li>
                    <li><a href="./weeks/week6/functions.php">functions.php</a></li>
                    <li><a href="./weeks/week6/thx.php">thx.php</a></li>
                </ol>
            </aside>
        </div>
    </div>
    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Kyoka Miyamura</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

    </footer>
</body>
</html>