<!-- PHP script for registration starts--> 

    <?php

        // Include the navigation for the page
        include('includes/nav.html');

        // If the form has been submitted...
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            // Connect to the database
            require('connect_db.php');

            // Initialise an array for error messages
            $errors = array();

            // If first name not found
            if (empty($_POST['first_name'])){

                // ask for first name
                $errors[] = 'Enter your first name.';

            } else {
                // or store its value in a variable
                $fn = mysqli_real_escape_string($link, trim($_POST['first_name']));
            };

            // If last name not found
            if (empty($_POST['last_name'])){

                // ask for it
                $errors[] = 'Enter your last name.';

            } else {
                // or store its value in a variable
                $ln = mysqli_real_escape_string($link, trim($_POST['last_name']));
            };

            // If email not found
            if (empty($_POST['email'])){

                // ask for it
                $errors[] = 'Enter your email address.';

            } else {
                // or store its value in a variable
                $e = mysqli_real_escape_string($link, trim($_POST['email']));
            };

            // If pass1 has been submitted 
            if (!empty($_POST['pass1'])){ 

                // and it doesn't match with pass2
                if ($_POST['pass1'] != $_POST['pass2']){

                    // display error message
                    $errors[] = 'Passwords do not match.';

                } else {
                    // If they do match, store their value in a variable
                    $p = mysqli_real_escape_string($link,trim($_POST['pass1']));
                }
            }

            // If email address already registered
            if (empty($errors)){
                $q = "SELECT user_id FROM users WHERE email = '$e'";
                $r = @mysqli_query ($link, $q);

                // Error message asking to signt in
                if (mysqli_num_rows($r) != 0) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>';
            }

            // If there were no errors registering
            if (empty($errors)){

                // store the data in the database 'users'
                $q = "
                    INSERT INTO users (first_name, last_name, email, pass, reg_date)
                    VALUES ('$fn', '$ln', '$e', '$p', NOW())";
                $r = @mysqli_query($link, $q);
                if ($r){

                    // display a confirmation 
                    echo '<h1>You are now registered. Please, login.</p>
                    <a href="login.php">Login<a>';
                }

                // and close the database connection
                mysqli_close($link);
                exit();

            } else { // If there were errors registering
                // display the errors stored
                echo '<h2>The following error(s) occured:</h2>';
                foreach($errors as $msg){
                    echo " - $msg<br>";
                };

                // ask to try again
                echo '<p>or please try again.</p></div>';

                // and close the connection
                mysqli_close($link);
            } 

        include('includes/footer.html'); 
        }
        
    ?>
<!-- PHP script for registration ends--> 


<!-- HTML for registration starts--> 
    <form action="register.php" method="post">
        <input 
            type="text" 
            name="first_name" 
            placeholder="*First Name" 
            value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"
        >
        <input 
            type="text" 
            name="last_name" 
            placeholder="*Last Name" 
            value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"
        >
        <input 
            type="email" 
            name="email" 
            placeholder="*Email"
            value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"
        >
        <input 
            type="password" 
            name="pass1" 
            placeholder="*Create Password" 
            value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>"
        >
        <input 
            type="password" 
            name="pass2" 
            class="form-control" 
            placeholder="Confirm Password" 
            value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"
        >
        <input 
            type="submit" 
            value="Register"
        > <!-- </p>-->
    </form>
<!-- HTML for registration ends--> 