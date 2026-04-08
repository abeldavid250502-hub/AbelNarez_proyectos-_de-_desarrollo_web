<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$rutaBase = "";

if (strpos($_SERVER['REQUEST_URI'], 'formularios') !== false ||
    strpos($_SERVER['REQUEST_URI'], 'sesiones') !== false ||
    strpos($_SERVER['REQUEST_URI'], 'bd') !== false) {
    $rutaBase = "../";
}
?>
<?php
// Ruta absoluta del proyecto en InfinityFree
$rutaBase = "https://registro.gt.tc/";

// Ajustar si estás en una subcarpeta
if (strpos($_SERVER['REQUEST_URI'], '/formularios/') !== false ||
    strpos($_SERVER['REQUEST_URI'], '/sesiones/') !== false ||
    strpos($_SERVER['REQUEST_URI'], '/bd/') !== false) {

    $rutaBase = "https://registro.gt.tc/";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="<?= $rutaBase ?>multiphp/estilos.css">
</head>

<body>

<header>
  <nav>
    <a href="<?= $rutaBase ?>inicio.php">Inicio</a> |

    <?php if (!isset($_SESSION["usuario"])) { ?>
        <!-- Usuario NO autenticado -->
        <a href="<?= $rutaBase ?>formularios/login.php">Login</a> |
        <a href="<?= $rutaBase ?>formularios/registro.php">Registro</a> |
    <?php } else { ?>
        <!-- Usuario autenticado -->
        <a href="<?= $rutaBase ?>sesiones/dashboard.php">Dashboard</a> |
        <a href="<?= $rutaBase ?>bd/personas-lista-vista.php">Personas</a> |
        <a href="<?= $rutaBase ?>sesiones/cerrar.php">Cerrar sesión</a>
    <?php } ?>
</nav>


</header>

<main>
