<!doctype html>
<html lang="en">

    <head>
      
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Update record</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <style>
          .container {
            margin-top: 40px;
            margin-bottom: 40px;
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
                if ( empty( $_POST[ 'id' ] ) ){ 
                    $errors[] = 'Enter ID Number' ;
                } else { 
                    $id = mysqli_real_escape_string( $link, trim( $_POST[ 'id' ] ) ) ; 
                }

                # Check for a first name.
                if ( empty( $_POST[ 'first_name' ] ) ) { 
                    $errors[] = 'Enter your first name.' ; 
                } else { 
                    $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; 
                }

                # Check for a last name.
                if (empty( $_POST[ 'last_name' ] ) ) { 
                    $errors[] = 'Enter your last name.' ; 
                } else { 
                    $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; 
                }

                # Check if id registered.
                if ( empty( $errors ) ) {
                    $q = "UPDATE my_table SET id='$id', first_name='$fn', last_name='$ln' WHERE id=$id";
                    $r = @mysqli_query ( $link, $q ) ;
                    if ($r) {
                        header("Location: read_table.php");
                    } else {
                        echo "Error deleting record: " . $link->error;
                    }

                # Close database connection
                    mysqli_close($link);
                    exit();  

                } else { # Or report errors
                    echo '
                        <script type ="text/JavaScript">
                        alert("' ;
                    foreach ( $errors as $msg ) { 
                        echo "$msg " ; 
                    }
                    echo 'Please try again.")</script>';

                # Close database connection.
                    mysqli_close( $link );
                }
            }
        ?>

        <div class="container">
            <h2>Update record</h2>
            <form action="update_record.php" method="post">
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
                <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Update Record">
            </form>
            <a href="create_record.php">Add Records</a>  |  
            <a href="read_table.php">Read Records</a>  |  
            <a href="update_record.php">Update Record</a>  | <a href="delete_record.php">Delete Record</a>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    </body>

</html>