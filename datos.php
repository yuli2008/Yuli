<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "estdato2";

$coneccion = mysqli_connect($servidor, $usuario, $clave, $bd);

$mensaje = ""; // ← Mensaje a mostrar

if (!$coneccion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['enviar'])) {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $servicio_deseado = trim($_POST['servicio_deseado']);
    $fecha = trim($_POST['fecha']);
    $hora = trim($_POST['hora']);

    // Validación de campos vacíos
    if (empty($nombre) || empty($telefono) || empty($servicio_deseado) || empty($fecha) || empty($hora)) {
        $mensaje = "❗ Todos los campos son obligatorios.";
    }
    // Validación de fecha no pasada
    elseif ($fecha < date('Y-m-d')) {
        $mensaje = "❗ No puedes reservar una cita en una fecha pasada.";
    }
    else {
        // Verificar duplicidad
        $verificar = "SELECT * FROM contacto WHERE fecha = '$fecha' AND hora = '$hora'";
        $resultado = mysqli_query($coneccion, $verificar);

        if (mysqli_num_rows($resultado) > 0) {
            $mensaje = "⚠️ Ya hay una cita reservada para $fecha a las $hora. Intenta con otro horario.";
        } else {
            $insertar = "INSERT INTO contacto (nombre, telefono, servicio_deseado, fecha, hora) 
                         VALUES ('$nombre', '$telefono', '$servicio_deseado', '$fecha', '$hora')";

            if (mysqli_query($coneccion, $insertar)) {
                $mensaje = "✅ Cita reservada con éxito para $fecha a las $hora.";
            } else {
                $mensaje = "❌ Error al reservar la cita: " . mysqli_error($coneccion);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Reservación</title>
    <style>
        body {
            background-image: url(imgPro/descarga.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 35px;
            width: 90%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin: 2%;
        }

        #res {
            background-color: rgb(220, 133, 163);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 4px 10px #a45772;
            color: black;
            text-align: center;
            margin: auto;
        }

        .mi-div {
            background-color: rgb(220, 133, 163);
            padding: 40px;
            border-radius: 20px;
            color: black;
            text-align: center;
            margin-top: 20px;
            font-family: Arial, sans-serif;
            width: 90%;
            max-width: 500px;
        }

        a {
            text-decoration: none;
            font-weight: bold;
            color: #000;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }

        a:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <div id="res">
        <?php if (!empty($mensaje)): ?>
            <div class="mi-div"><?php echo $mensaje; ?></div>
        <?php endif; ?>
        <a href="Reservaciones.html">← Volver a Reservaciones</a>
    </div>

</body>
</html>
