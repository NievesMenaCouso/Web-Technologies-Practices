<!-- File to be used by the 'Buy Now' button from the Home (nav.php) page --> 
    
    <?php

        // Add the file that will begin the session
        include('includes/nav.php');

        // Assign the passed product ID to a variable
        if (isset($_GET['id'])) $id = $_GET['id'];

        // Open the database connection
        require ('connect_db.php');

        // Retrieve the data of the selected products from the database
        $q = "SELECT * FROM products WHERE item_id = $id";
        $r = mysqli_query($link, $q);
        if (mysqli_num_rows($r) == 1){
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);

            // If user has already placed a product in the cart
            if (isset($_SESSION['cart'][$id])){

                // add a product to the cart and increment the quantity by one
                $_SESSION['cart'][$id]['quantity']++;
                // and send a notification
                echo '<p>Another '.$row["item_name"].' has been added to your cart</p>';
            
            // If the user has not placed a product in the cart yet
            } else {

                // initiate the array of the cart
                $_SESSION['cart'][$id] = array ('quantity' => 1, 'price' => $row['item_price']);

                // and send a notification
                echo '<p>A '.$row["item_name"].' has been added to your cart</p>';
            }
        }

        // Close the link to the database 
        mysqli_close($link); 
        
    ?>
