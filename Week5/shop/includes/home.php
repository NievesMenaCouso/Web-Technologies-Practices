<!-- After login succeeds you create the home page to be loaded
with session data on all pages that the user can navigate -->
    <?php 

        // Include the navigation for the page
        include('includes/nav.php');

        // Open the database connection
        require('connect_db.php');

        // Retrieve all items from the products table in your database
        $q = "SELECT * FROM products";
        $r = mysqli_query($link,$q);
        if (mysqli_num_rows($r) > 0) {

            // Display items retrieved
            while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                echo '
                <img src="'.$row['item_img'].'" alt="'.$row['item_name'].'">
                <h5>'.$row['item_name'].'</h5>
                <p>'.$row['item_desc'].'</p>
                <p>&pound '.$row['item_price'].'</p>
                <href="added.php?id='.$row['item_id'].'">Buy Now</a>.';
            }

            // Then close database connection
            mysqli_close($link);
        
        // If no items have been found in the database
        } else { 

            // Display message 
            echo '<p>There are currently no items in the table to display.</p>';
        }
        
        // Include the footer
        include('includes/footer.html');
        
    ?>