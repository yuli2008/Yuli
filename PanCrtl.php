<?php session_start();?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"/> 
<title>Panel Control</title>
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
        background-color: rgba(206, 159, 241, 0.99);
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(243, 2, 235, 0.87);
        color: black;
        text-align: center;
        margin: 1%;
    }
    p{
      background-color:rgba(206, 159, 241, 0.99);  
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
<h2>La sesion creada correctamente</h2> 
<p> 
<?php 
if(isset($_POST['nombre'])){ 
$_SESSION['nombre'] = $_POST['nombre']; 
echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>"; 
}else{ 
if(isset($_SESSION['nombre'])){ 
echo "Has iniciado Sesion como: ".$_SESSION['nombre']; 
}else{ 
 // Si la sesion expiro o no se creo  mostraremos el siguiente mensaje 
echo "Acceso Restringido"; 
} 
} 
?></p> 
<br>  
<p><a href="Inicio.html">Ir a la página inicial</a>
<a href='CerrarSession.php'>Cerrar Sesion</a></p> 
<br> 

</body> 
</html>