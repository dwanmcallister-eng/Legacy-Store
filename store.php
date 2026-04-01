

<!DOCTYPE html>
<!--
Author: Dwan McAllister
Date: 2-9-26
Purpose: Assignment 2
-->
<html>
    <head> <!--Contains title and links -->
        <title>University of Lancashire - Products</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php   // Open PHP session
            session_start();
            $connection = require_once ('conn.php'); // Database Connection
            $query ="SELECT * FROM tbl_products"; // SQL Query
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
        <div id="Store">
            <?php
            //function iteminfo()
                //{
                    //header("Location: iteminfo.php?msg=itemid".$products["product"])
                //}
                while($products = mysqli_fetch_array($result, MYSQLI_ASSOC)) // info translated for accessibility/begins loop
                {
                    echo "<div id='".$products["product_id"]."' class='ItemCard'>";
                    echo "<p><img class='ItemImage' src='".$products['product_src']."'/></p>";
                    echo "<div class='ItemInfo'>";
                    echo "<h3 class='ItemTitle'>".$products["product_title"]."</h3>";
                    echo "<p class='ItemPrice'>".$products["product_price"]."</p>";
                    echo "<p class='ItemStock'>".$products["product_stock"]."</p>";
                    echo "<form id='readmore' action='iteminfo.php'>
                        <p>
                            <input type='submit' name='ItemInfo' Value='Read More'>
                        </p>
                        </form>";
                    echo "</div>";
                    echo "</div>";
                } //loops through array
            ?>
        </div>
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
                            ?>
                        </a>
                    </li>
            </nav>
        </footer>
    </body>
</html>