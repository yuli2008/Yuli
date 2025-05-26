<?php session_start(); ?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"/> 
<title>Login.php</title>
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
        background-color:rgba(206, 159, 241, 0.99);
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: black;
        text-align: center;

    }
    form{
        background-color: rgba(206, 159, 241, 0.99);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: black;
        width: 200px;
        text-align: center;
    }
    </style>

</head> 
<body> 
<?php 
if(isset($_SESSION['nombre'])){ 
echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . ""; 
echo "<p><a href='CerrarSession.php'>Cerrar Sesion</a></p>"; 
echo "<br><p><a href='PanCrtl.php'>Ir al panel de control</a>"; 
}else {
    ?>
    <h2>Creando la sessión</h2>
<form action="PanCrtl.php" method="POST">
    <p>Nombres:</p>
    <p><input type="text" placeholder="Increse su nombre" name="nombre"required/> </p>
    <p><input type="submit"  value="Crear Sesion" /></p>
</form>
<?php

}
?>
</body>  
</html>