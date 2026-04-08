<?php
require "../multiphp/header.php";
require "Bd.php";

$id = $_GET["id"] ?? 0;

$pdo = Bd::pdo();
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<p>Usuario no encontrado.</p>";
    require "../multiphp/footer.php";
    exit;
}
?>

<h1>Editar usuario</h1>

<p><a href="personas-lista-vista.php">Volver</a></p>

<form action="personas-modifica-procesa.php" method="post">

    <input type="hidden" name="id" value="<?= $user['id'] ?>">

    <label>Usuario</label>
    <input type="text" name="usuario" value="<?= htmlentities($user['usuario']) ?>" required>

    <label>Nueva contraseña (opcional)</label>
    <input type="password" name="password">

    <button type="submit">Guardar</button>

</form>

<form action="personas-elimina.php" method="post"
      onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?')">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <button type="submit" style="background:red;color:white;margin-top:10px;">
        Eliminar
    </button>
</form>

<?php require "../multiphp/footer.php"; ?>
