<?php
//include "dbconnection.php";
//
//// Check user login or not
session_start(); 
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}else{
    $user = $_SESSION['uname'];
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage - Hola <?php echo $user ?></h1>
        <form method='post' action="logout.php">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>