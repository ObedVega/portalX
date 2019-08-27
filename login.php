<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
/*
    .row.content {height: 450px}
    
*/
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
/*      background-color: #f1f1f1;*/
      background-color: white;    
      height: 100%;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
      .color{
          color: red;
      }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      
    .form-signin {
        width: 100%;
        max-width: 420px;
        padding: 15px;
        margin: 0 auto;
      }
      .box {
        display: none;
      }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="registro.html"> Registro</a></li>  
      </ul>     
    </div>
  </div>
</nav>
  <form action="#" method="post" class="form-signin fbg-color">
    <div class="text-center mb-4">
        <div class=""><h1>Inicio de Sesión</h1></div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Correo Electronico" tabindex="1" autofocus="" required>
                </div>            
            </div>
        </div>  
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="password" name="pass" id="password" class="form-control form-control-lg" placeholder="Contraseña" tabindex="2" required>
                </div>             
            </div>
        </div>  
        <div class="row">
            <div class="col-sm-12 alert alert-success box">
                <p class="mt-5 mb-3 text-muted text-center color" id="mensaje"></p>
            </div>
        </div>
        <div class="checkbox mb-3">
            <label><input type="checkbox" value="remember-me"> Recordar Contraseña</label>
        </div>
        <div class="row">
            <div class="col-sm-12">    
                <button id="login" class="btn btn-lg btn-default btn-block" type="submit" name="login" value="LOGIN" tabindex="3" >Ingresar</button>
                <br>    
                <p class="mt-5 mb-3 text-muted text-center">© 2019</p>
            </div>
        </div>
    </div>      
</form>
 

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
<script src="login.js"></script>       
</html>
