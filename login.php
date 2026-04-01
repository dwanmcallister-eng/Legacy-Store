
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
        <?php
            if(isset($_SESSION["logged"]))
            {
                if($_SESSION["logged"]==true)
                {
                    echo "<div id='login'>";
                    echo "<form id='logout' action='logoutscript.php'";
                    echo "<p>You are currenty logged in..</p>";
                    echo "<p><input type='submit' name='logout' value ='Log-out'></p>";
                    echo "</div>";
                }
            }
            else
            {
                echo "<div id='login'>";
                echo "<form id='login' action='myscript.php' method='post'";
                echo "<p>Enter your username and password to proceed</p>";
                echo "<p>Username:  </p>";
                echo "<input type='text' name='username' id='username' required>";
                echo "<p> Password: </p>";
                echo "<input type='text' name='password' id= 'password' required>";
                echo "<p><input type='submit' name='Log Me In'></p>";
                echo "</form>";
                echo    "<form id='goToRegister' action='register.php'>
                        <p> Don't have an account? Create One!</p>
                        <p>
                            <input type='submit' name='Create Account' Value='Create Account'>
                        </p>
                        </form>";
                echo "</div>";
                if (isset( $_GET) && isset($_GET["msg"]))  
                {
                    echo htmlspecialchars( $_GET["msg"] );
                }
            }
        ?>
        <!-- <div id="login">
        <form id="login" action="myscript.php" method="post">
        <p>Enter your username and password to proceed</p>
        <p>Username:  </p>
            <input type="text" name="username" id="username" required>
         <p> Password: </p>
            <input type="text" name="password" id= "password" required>
        <p>
            <input type="submit" name="Log Me In">
        </p>
        </form>
        <form id="goToRegister" action="register.php">
        <p> Don't have an account? Create One!</p>
        <p>
            <input type="submit" name="Create Account" Value="Create Account">
        </p>
        </form>
        </div> -->
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