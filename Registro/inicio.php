<?php
session_start();
require "multiphp/header.php";
?>

<h1>Bienvenido al Sitio con Usuarios</h1>

<p>Este proyecto está desarrollado con:</p>

<ul>
    <li>PHP 8</li>
    <li>SQLite como base de datos</li>
    <li>Sesiones para validar acceso</li>
    <li>Registro e inicio de sesión</li>
    <li>Estructura solicitada por el profesor</li>
</ul>

<?php if (!isset($_SESSION["usuario"])): ?>
    <p>
        <a href="formularios/login.php">Iniciar sesión</a> |
        <a href="formularios/registro.php">Crear cuenta</a>
    </p>
<?php else: ?>
    <p>Estás autenticado como: <strong><?= htmlentities($_SESSION["usuario"]) ?></strong></p>
    <p>Usa el menú superior para navegar.</p>
<?php endif; ?>

<?php require "multiphp/footer.php"; ?>
