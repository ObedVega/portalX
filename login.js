$(document).ready(function(){
    $("#login").click(function(){
        var username = $("#email").val();
        var password = $("#password").val();
        var msg = "";
        
        if( username != "" && password != "" ){
             $.ajax({
                url:'checkUser.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    if(response == 1){
                        window.location = "home.php";
                    }else{
                        msg = "Usuario o Contraseña Invalidas!";
                    }
    //                $("#mensaje").html(msg);
                     $(".box").show(); 
                    $("#mensaje").html(response);
                }
            });
        }else{
            $(".box").show(); 
            $("#mensaje").html("Faltan Datos!");
        }
        
//        if( email =="" && password ==""){
//            $("#mensaje").text("Porfavor llena los siguientes campos");
//        }else{
//            if (email==""){
//                $("#mensaje").text("Ingresar correo electronico");
//            }else{
//                if (password==""){
//                    $("#mensaje").text("Ingresar contraseña");
//                }else{
//                    window.location = "home.php";
//                    $.post("login.php", {correo: email, contrasena: password},
//                           function(datos,status){
//                   //         console.log('datos:'+datos);
//                            
//                            $("#mensaje").html(datos);
//               //             var data = datos;
//                       alert("Data: " + datos + "\nStatus: " + status);
//                    });
//                }
//            }
//        }
       
    });      
});