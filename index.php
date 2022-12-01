<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
 
    <title>first_proyect</title>
</head>

<body>

<?php
date_default_timezone_set('America/Argentina/Salta');

$dia = date('j');
$mes = date('m');
$año = date('Y');
$fecha = $dia . '/' . $mes . '/' . $año;
$nombre = 'Teo';
$apellido = 'Demattei';
$presentacion = $nombre . " " . $apellido;

$definicion = 'estudio programacion hace un año y un poco mas, <br> me enamore de esta gigantesco mundo gracias a que me dio curiosidad como funcionaba todo esto'





?>
    
<div class="titulo">
    <h1>Trabajo Practico / Modulo 1</h1>
</div>

<div class="presentacion_container">
<h2>Hola soy <?php echo $presentacion?></h2>
<p>una breve historia:<?php echo $definicion?></p>
</div>

<footer>

<h3><?php echo $presentacion?></h3>
<p><?php echo $fecha?></p>
</footer>

</body>
</html>