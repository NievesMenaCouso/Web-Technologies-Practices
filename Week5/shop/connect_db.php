<!-- File to connect to MySQL Database --> 

    <?php 

        # Connect  on 'localhost' 'practice' .
        $link = mysqli_connect('localhost','root','usbw','practice'); 
        
        # Otherwise fail gracefully and explain the error.
        if (!$link) { 
            die('Could not connect to MySQL: ' . mysqli_error()); 
        };  
        
    ?>