<?php
  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
  # Connect to the database.
    require ('connect_db.php');
  # Initialize an error array.
    $errors = array();
  # Check for a ID.
    if ( empty( $_POST[ 'id' ] ) ) { 
      $errors[] = 'Enter ID Number' ; 
    }
    else { 
      $id = mysqli_real_escape_string( $link, trim( $_POST[ 'id' ] ) ) ; 
    }
  # Check for a first name.
    if ( empty( $_POST[ 'first_name' ] ) ) { 
      $errors[] = 'Enter ID Number' ; 
    }
    else { 
      $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; 
    }
  # Check for a last name.
    if ( empty( $_POST[ 'last_name' ] ) ) { 
      $errors[] = 'Enter ID Number' ; 
    }
    else { 
      $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; 
    }
  # Check if email address already registered.
    if ( empty( $errors ) ) {
      $q = "SELECT id FROM my_table WHERE id='$id'" ;
      $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[ ] = 'User already registered.' ;
    }
  # On success insert data into 'my_table' database table.
    if ( empty( $errors ) ) {
      $q = "INSERT INTO my_table (id, first_name, last_name, ) 
        VALUES ('id','$fn', '$ln')";
      $r = @mysqli_query ( $link, $q ) ;
      if ($r) { 
        echo '<p>Record added successfully</p> '; 
      }
    # Close database connection.
      mysqli_close($link); 
      exit();
    } else { # Or report errors.
      echo '<p>The following error(s) occurred:</p>' ;
      foreach ( $errors as $msg )
      { echo " - $msg<br>" ; }
      echo '<p>or please try again.</p></div>';
    # Close database connection.
      mysqli_close( $link );
    }  
  }
?>