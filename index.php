
<!DOCTYPE html>
<!--
Author: Dwan McAllister
Date: 2-9-26
Purpose: Assignment 2
-->
<html>
    <head> <!--Contains title and links -->
        <title>University of Lancashire - Legacy Store Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php   // Open PHP session
            session_start();
            $connection = require_once ('conn.php'); // Database Connection
            $query ="SELECT * FROM tbl_offers"; // SQL Query
            $result = mysqli_query($connection, $query); // info from query saved as variable
        ?>
    </head>
    <body> <!-- Contains all other content-->
        <header> 
            <div id="Logo">
                <a href="index.php"><img id="LogoImg" src="images/logo.png" alt="ULAN Logo"></img></a>
            </div>
            <nav> <!-- Contains links to other pages -->
                <ul id="NavList">
                    <li id= "SubNavList">
                        <a href="index.php">Home</a>
                    </li>
                    <li id= "SubNavList">
                        <a href="store.php">Products</a>
                    </li>
                    <li id= "SubNavList">
                        <a href="cart.php">Cart</a>
                    </li>
                    <li id= "SubNavList">
                        <a href="login.php">
                            <?php
                            if(isset($_SESSION["logged"]))
                            {
                                if($_SESSION["logged"]==true)
                                {
                                    echo "Log-out";
                                }
                            }
                            else
                            {
                                 echo "Log-in";
                            }
                            ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
            <h1>
                <?php
                if(isset($_SESSION["logged"]))
                {
                    if($_SESSION["logged"]==true)
                    {
                        echo "Welcome back " . $_SESSION["name"];
                    }
                }
                else
                {
                    echo "Welcome to University of Lancashire Legacy Store";
                }
                ?>
            </h1>
            <div id="offers">
                <?php
                    while($offers = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {
                        echo "<div class='offercard' id='".$offers["offer_id"]."'>";
                        echo "<h2 class = 'offertitle'>".$offers["offer_title"]."</h2>";
                        echo "<p class = 'offerdesc'>".$offers["offer_desc"]."</p>";
                        echo "</div>";
                    }
                ?>
            </div>
        <p id="videos" class="blueback"> <!--Embeded Video-->
            <video id="video" class="localvid" controls>
                <source src = "video/video.mp4" type = "video/mp4">
                    Your broswer does not support this video.
                </video>
            <iframe 
                id= "video"
                frameborder = "0"
                src = "https://www.youtube.com/embed/vzbO3x3OUJQ"
                allowfullscreen>
                Your broswer does not support this video.
            </iframe>           
        </p>
        <footer>
            <div id="Logo">
                <a href="index.php"><img id="LogoImg" src="images/logo.png" alt="ULAN Logo"></img></a>
            </div>
            <nav> <!-- Contains links to other pages -->
                <ul id="NavList">
                    <li id= "SubNavList">
                        <a href="index.php">Home</a>
                    </li>
                    <li id= "SubNavList">
                        <a href="store.php">Products</a>
                    </li>
                    <li id= "SubNavList">
                      <a href="cart.php">Cart</a>
                    </li>
                    <li id= "SubNavList">
                        <a href="login.php">
                            <?php
                            if(isset($_SESSION["logged"]))
                            {
                                if($_SESSION["logged"]==true)
                                {
                                    echo "Log-out";
                                }
                            }
                            else
                            {
                                 echo "Log-in";
                            }
                            ?></a>
                    </li>
            </nav>
        </footer>
    </body>
</html>