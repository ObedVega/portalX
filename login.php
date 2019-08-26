<?php
$email=$_POST['correo'];  
$password=($_POST['contrasena']);



if ($email!="" && $password!=""){
    //Aqui va el query sql
    $emailTemp = "vega.obed@gmail.com";
    $psswdTemp = "obedvega1";
    //
    if ($email == $emailTemp){
        if ($password == $psswdTemp){
            echo ("Datos correctos");
        }else{
            echo ("Contraseña Incorrecta");
        }
    }else{
        echo ("Usuario Incorrecto");
    }
}else{
    echo ("Datos Incorrectos");
}
?>