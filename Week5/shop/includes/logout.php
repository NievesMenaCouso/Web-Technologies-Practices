<!-- File to clear and close any open session --> 
    <?php

        // Check if the session is already started and if none is then it starts one
        session_start();
        
        // Check whether session variable is already set or not
        if (!isset($_SESSION['user_id'])){
            require('login_tools.php');
            load();
        }

        // Clear any existing variables
        $_SESSION = array();

        // End and close the session, leaving a message to the user
        session_destroy();

    ?>
