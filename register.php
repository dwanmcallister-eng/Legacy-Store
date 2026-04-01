<!--
Author: Dwan McAllister
Date: 2-17-26
Purpose: Assignment 2
-->

<!DOCTYPE html>
<html>
    <head> <!--Contains title and links -->
        <title>University of Lancashire - Cart</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="registerPage">
        <form id="register" action="registerscript.php" method="post">
        <p>To Create an account, enter the information below.</p>
        <p>Username: </p>
            <input type="text" name="rUsername" id= "rUsername" required>
        <p>Email: </p> 
            <input type="email" name="rEmail" id= "rEmail" required>
        <p>Password: </p>
            <input type="password" name="rPassword" id= "rPassword" min="6" required>
        <p>
            <input type="submit" name="Create Account">
        </p>
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
                        <a href="login.php">Login</a>
                    </li>
            </nav>
        </footer>
    </body>
</html>