

<!DOCTYPE html>
<!--
Author: Dwan McAllister
Date: 2-9-26
Purpose: Assignment 2
-->
<html>
    <head> <!--Contains title and links -->
        <title>University of Lancashire - Cart</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php   // Open PHP session
            session_start();
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
                            ?></a>
                    </li>
                </ul>
            </nav>
        </header>
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