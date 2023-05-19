<!-- File with the navigation bar visible once you've logged in
with the options home (index.php), cart my order and signt/log out -->

    <!-- Navbar starts --> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">WT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- Navbar ends --> 

    <!-- PHP script to start session starts --> 
        <?php
            #Access session
            session_start();
            #Redirect if not logged in
            if(!isset($_SESSION['user_id'])){
                require('login_tools.php');
                load();
            }
        ?>
    <!-- PHP script to start session ends --> 