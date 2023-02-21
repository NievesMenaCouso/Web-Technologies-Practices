<!doctype html>
<html lang="en">

    <head>
      
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Create a record</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Form Validation!</title>
        <style>
          .container{
            margin-top: 40px
          }
          h2 {
                border-left: solid 10px gray;
                padding: 10px;
                margin-bottom: 50px;
            }
        </style>

    </head>

    <body>
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
                    VALUES ('$id','$fn', '$ln')";
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

        <div class="container">
            <h2>Create record</h2>
            <form action="create_record.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputid">ID</label>
                            <input type="text" name="id" class="form-control" value=" <?php if (isset($_POST['id'])) echo $_POST['id']; ?> ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputfirst_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value=" <?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?> ">
                        </div>
                    </div>   
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputlast_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value=" <?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                        </div>
                    </div>    
                </div>    
                <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Add Record">
            </form>
        </div>
        
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    </body>
</html>
