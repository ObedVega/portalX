<?php
session_start();
include "dbconnection.php";

$uname = $_POST['username'];  
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $sql = "select count(*) as cntUser from usuarios where email='".$uname."' and password='".$password."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}
$conn->close(); 
?>