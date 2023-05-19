
<?php
  // Include the markup for the navigation
  include('includes/nav.html');
  // Include the script to connect to database
  require('connect_db.php');
  // Retrieve items from products database table
  $q = "SELECT * FROM products";
  $r = mysqli_query($link,$q);
  if(mysqli_num_rows($r) > 0) {
    // Display the items
    while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
      echo '
        <img src="'. $row['item_img'].'" class="card-img-top" alt="'. $row['item_name'].'">
        <h5>'. $row['item_name'].'</h5>
        <p>'. $row['item_desc'].'</p>
        <p> &pound '. $row['item_price'].'</p>
        <a href="added.php?id='.$row['item_id'].'" class="btn btn-light">Buy Now</a>';
    }
    // and then close the connection
    mysqli_close($link);
  } else { 
    // Message if no itmes found
    echo '
      <p>There are no items found.</p>';
  }
  // Add the footer script
  include('includes/footer.html');
?>

  <!-- Welcome Starts -->
    <div class="container-sm">
      <?php
        $myString = "<h1>Welcome, Nieves</h1>";
        echo '<h1>Hello, world!</h1>';
        echo $myString;
      ?>
    </div>
  <!-- Welcome Ends -->

  <!-- Cardeck Starts -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="img/wh-t.JPG" class="card-img-top" alt="white t-shirt">
            <div class="card-body">
              <h5 class="card-title">White T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/red-t.JPG" class="card-img-top" alt="red t-shirt">
            <div class="card-body">
              <h5 class="card-title">Red T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/purple-t.JPG" class="card-img-top" alt="Purple t-shirt">
            <div class="card-body">
              <h5 class="card-title">Purple T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="img/green-t.JPG" class="card-img-top" alt="green t-shirt">
            <div class="card-body">
              <h5 class="card-title">Green T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/blue-t.JPG" class="card-img-top" alt="blue t-shirt">
            <div class="card-body">
              <h5 class="card-title">Blue T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/bl-t.JPG" class="card-img-top" alt="black t-shirt">
            <div class="card-body">
              <h5 class="card-title">Black T-shirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-dark">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Cardeck Ends -->
 