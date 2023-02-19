<?php
  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
  {
  #Further PHP statements to be added here.
  # Connect to the database.
    require ('connect_db.php');
  # Initialize an error array.
    $errors = array();
  # Check for a ID.
  if ( empty( $_POST[ 'id' ] ) )
  { $errors[] = 'Enter ID Number' ; }
  else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'id' ] ) ) ; }
  }
?>