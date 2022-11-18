    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Kyoka</legend>

            <label for="">First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error"><?php echo $first_name_err; ?></span>
            <label for="">Last Name</label>
            <input type="text" name="last_name"
            value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error"><?php echo $first_name_err; ?></span>
            <label for="">Email</label>
            <input type="email" name="email"
            value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="error"><?php echo $first_name_err; ?></span>

            <label for="">Age</label>
            <ul>
                <li>
                    <input type="radio" name="age" value="female"
                    <?php if(isset($_POST['age']) && $_POST['age'] == '~18') echo 'checked = "checked" '; ?>>~18
                </li>
                <li>
                    <input type="radio" name="age" value="male"
                    <?php if(isset($_POST['age']) && $_POST['age'] == '19~20') echo 'checked = "checked" '; ?>>19~20
                </li>
                <li>
                    <input type="radio" name="age" value="neither"
                    <?php if(isset($_POST['age']) && $_POST['age'] == '21~25') echo 'checked = "checked" '; ?>>21~25
                </li>
            </ul>
            <span class="error"><?php echo $age_err; ?></span>

            <label for="">Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"><?php echo $phone_err; ?></span>

            <label for="">Favorite Foods</label>
            <ul>
                <li>
                    <input type="checkbox" name="foods[]" value="curry"
                    <?php if(isset($_POST['foods']) && in_array('curry', $foods)) echo 'checked = "checked" ' ; ?>>Curry
                </li>
                <li>
                    <input type="checkbox" name="foods[]" value="stew"
                    <?php if(isset($_POST['foods']) && in_array('stew', $foods)) echo 'checked = "checked" '; ?>>Stew
                </li>
                <li>
                    <input type="checkbox" name="foods[]" value="beef"
                    <?php if(isset($_POST['foods']) && in_array('beef', $foods)) echo 'checked = "checked" '; ?>>Beef
                </li>
                <li>
                    <input type="checkbox" name="foods[]" value="egg"
                    <?php if(isset($_POST['foods']) && in_array('egg', $foods)) echo 'checked = "checked" '; ?>>Egg
                </li>
                
            </ul>
            <span class="error"><?php echo $foods_err; ?></span>

            <label for="">Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="privacy" value="yes"
                    <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" '; ?>>Privacy
                </li>
            </ul>
            <span class="error"><?php echo $privacy_err; ?></span>

            <input type="submit" value="Send it!">
            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'" value="Reset">
        </fieldset>
    </form>
