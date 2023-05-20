<!-- File to log in or access other pages of the website --> 
    <!-- PHP script if login fails starts --> 
        <?php

            // Include the navigation for the page
            include('includes/nav.html');

            // If there are errors
            if (isset($errors) && !empty($errors)){

                // display the error message
                echo '<p id="err_msg">Oops! There was a problem:<br>';
                foreach($errors as $msg){
                    echo " - $msg<br>";
                }

                // and ask to try again with a link back to teh register page
                echo 'Please try again or <a href="register.php">Register</a></p>';
            }

        ?>
    <!-- PHP script if log in fails endss --> 

    <!-- HTML to log in starts --> 
        <form action="login_action.php" method="post">
            <input type="text" name="email" class="form-control" placeholder="*Enter Username/Email">
            <input type="password" name="pass" class="form-control" placeholder="*Enter Password">
            <input type="submit" value="Login" >
        </form>
    <!-- HTML to log in ends --> 