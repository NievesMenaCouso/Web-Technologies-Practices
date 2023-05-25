<!-- File to connect to MySQL Database --> 

    <?php 

        # Connect  on 'localhost' 'practice' .
        $link = mysqli_connect('localhost','root','lunatica2','tw'); 
        
        # Otherwise fail gracefully and explain the error.
        if (!$link) { 
            die('Could not connect to MySQL: ' . mysqli_error()); 
        };  
        
    ?>