<html>
    <head>
        <title>My Adder Assignment</title>
        <!-- missing styles -->
        <style>
            .error {
                color: red;
                font-size: 25px;
            }
        </style>
    </head>
<body>
    <h1>Adder.php</h1> 

    <!--  don't need \ here missing method -->
    <form action="" method="post">
        <!-- missing label tag -->
        <label for="">Enter the first number:</label>
        <!-- wrong name, wrong type -->
        <input type="number" name="num1">
        <br>
        <!-- missing closing label tag -->
        <label>Enter the second number:</label>
        <!-- wrong type -->
        <input type="number" name="num2">
        <br>
        <!-- missing ", wrong value -->
        <input type="submit" value="Add Them!!"> 
    </form>
    <?php     //adder-wrong.php
        // missing $_POST['num2']
        if(isset($_POST['num1'], $_POST['num2'])){
            // missing condition when either of forms is empty
            if (empty($_POST['num1'] && $_POST['num2'])) {
                echo '<p class="error">Please fill out all of the fields!</p>';
            } else {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
    
                // wrong variable name, don't need - here
                $myTotal = $num1 + $num2;
    
                // wrong quatation mark
                echo '<h2>You added '. $num1 .' and '.$num2;
                // missing tag name, I added <b>
                echo '<p> and the answer is <br>
                <b style="color:red;">'. $myTotal .'!</b></p>';
    
                // missing ;
                echo'<p><a href="">Reset page</a>';
            }
        }

    ?>
</body>
<!-- wrong place for php closing tag-->
</html>