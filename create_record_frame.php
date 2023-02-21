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
            }
        </style>

    </head>

    <body>

        <div class="container"></div>
            <h2>Create record</h2>
            <form action="create_record.php" method="post">
                <div class="form-group">
                    <label for="inputid">ID</label>
                    <input type="text" name="id" class="form-control" value=" <?php if (isset($_POST['id'])) echo $_POST['id']; ?> ">
                </div>
                <div class="form-group">
                    <label for="inputfirst_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" value=" <?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?> ">
                </div>
                <div class="form-group">
                    <label for="inputlast_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value=" <?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
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
