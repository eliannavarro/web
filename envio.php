<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .label {
            font-weight: bold;
        }
        .button-back {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .button-back a {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .button-back a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos Recibidos</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            function obtenerValor($clave) {
                return isset($_GET[$clave]) ? htmlspecialchars($_GET[$clave]) : 'No especificado';
            }

            $notificaciones = isset($_GET['notificaciones']) ? "Sí" : "No";
            $tipo_cliente = obtenerValor('tipo_cliente');
            $nombre = obtenerValor('nombre');
            $direccion = obtenerValor('direccion');
            $telefono = obtenerValor('telefono');
            $correo = obtenerValor('correo');
            $prioridad = obtenerValor('prioridad');
            $instrucciones = obtenerValor('instrucciones');

            echo "<p><span class='label'>¿Desea recibir notificaciones por correo?</span> $notificaciones</p>";
            echo "<p><span class='label'>Tipo de cliente:</span> $tipo_cliente</p>";
            echo "<p><span class='label'>Nombre completo:</span> $nombre</p>";
            echo "<p><span class='label'>Dirección de entrega:</span> $direccion</p>";
            echo "<p><span class='label'>Teléfono:</span> $telefono</p>";
            echo "<p><span class='label'>Correo electrónico:</span> $correo</p>";
            echo "<p><span class='label'>Prioridad de envío:</span> $prioridad</p>";
            echo "<p><span class='label'>Instrucciones especiales:</span> $instrucciones</p>";
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
        ?>
        <div class="button-back">
            <a href="formulario.html">Regresar al formulario</a>
        </div>
    </div>
</body>
</html>

