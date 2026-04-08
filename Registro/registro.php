<?php require "../multiphp/header.php"; ?>

<h1>Registro de usuario</h1>

<form action="../sesiones/validar.php" method="post">
    <input type="hidden" name="accion" value="registrar">

    <label>Usuario</label>
    <input type="text" name="usuario" required>

    <label>Contraseña</label>
    <input type="password" name="password" required>

    <button type="submit">Registrar</button>
</form>

<p><a href="login.php">¿Ya tienes cuenta? Inicia sesión</a></p>

<?php require "../multiphp/footer.php"; ?>
