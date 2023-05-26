<?php 
    # Connect  on 'localhost' 'practice' .
    $link = mysqli_connect('localhost','root','lunatica2','practice'); 
    if (!$link) { 
        # Otherwise fail gracefully and explain the error. 
	    die('Could not connect to MySQL: ' . mysqli_error()); 
    };  
?>