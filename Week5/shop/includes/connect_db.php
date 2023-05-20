<?php 

    # Connect  on 'localhost' 'practice' .
    $link = mysqli_connect('localhost','root','usbw','practice'); 
    if (!$link) { 

        # Otherwise fail gracefully and explain the error. 
	    die('Could not connect to MySQL: ' . mysqli_error()); 
    };  
    
?>