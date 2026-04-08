<?php require "../multiphp/header.php"; ?>

<form action="personas-agrega-procesa.php" method="post">
    <h1>Agregar usuario</h1>

    <p><a href="personas-lista-vista.php">Volver a lista</a></p>

    <label>Usuario</label>
    <input type="text" name="usuario" required>

    <label>Contraseña</label>
    <input type="password" name="password" required>

    <button type="submit">Agregar</button>
</form>

<?php require "../multiphp/footer.php"; ?>
