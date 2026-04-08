<?php require "../multiphp/header.php"; ?>

<h1>Iniciar sesión</h1>

<form action="../sesiones/validar.php" method="post">
    <input type="hidden" name="accion" value="login">

    <label>Usuario</label>
    <input type="text" name="usuario" required>

    <label>Contraseña</label>
    <input type="password" name="password" required>

    <button type="submit">Entrar</button>
</form>

<p><a href="registro.php">¿No tienes cuenta? Regístrate aquí</a></p>

<?php require "../multiphp/footer.php"; ?>
