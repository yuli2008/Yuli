<?php 
// Mostramos la sesion 
session_start(); 
//Distruimos la sesion 
session_destroy(); 
?> 
<!DOCTYPE html> 
<html> 
    <style>
       body{
        background-image: url(imgPro/fondo4.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;  
    padding: 35px;
    width: 90%;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 0;
    overflow: hidden;
    margin:2%;
  
}
    h2{
        background-color: rgba(205, 159, 240, 0.99);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: black;
        text-align: center;

    }
     p{
      background-color:rgba(206, 159, 241, 0.99);  
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: purple;
        width: 200px;
        text-align: center;
    } 
    #cerrar{
        background-color: rgba(171, 134, 199, 0.99);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: purple;
        text-align: center;
    }
    
    </style>
<head> 
<meta charset="UTF-8"/> 
<title>Cerrar Sesion</title> 
</head> 
<body> 
<div id=cerrar>
<h2>Has Cerrado Sesión correctamente</h2> 
<br/> </div>
<div id=log>
    
<p><a href="Inicio.php">Ir al Login</a></p>
</div>

</body> 
</html>