$(document).ready(function(){
    var mensaje="";
    $("#login").click(function(){
        var email = $("#email").val();
        var password = $("#password").val();
        
        if( email =="" && password ==""){
            $("#mensaje").text("Porfavor llena los siguientes campos");
        }else{
            if (email==""){
                $("#mensaje").text("Ingresar correo electronico");
            }else{
                if (password==""){
                    $("#mensaje").text("Ingresar contraseña");
                }else{
                    $.post("login.php", {correo: email, contrasena: password},
                           function(data,status){
                        alert("Data: " + data + "\nStatus: " + status);
                    });
                }
            }
        }
    });             
});