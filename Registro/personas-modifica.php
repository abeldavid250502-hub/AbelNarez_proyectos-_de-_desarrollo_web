<?php
require "../multiphp/header.php";
require "Bd.php";

$id = $_GET["id"] ?? null;

if (!$id) {
    die("ID no recibido");
}

$pdo = Bd::pdo();
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$u = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$u) {
    die("Usuario no encontrado");
}

$idHtml = htmlentities($u["id"]);
$usuarioHtml = htmlentities($u["usuario"]);
?>

<form action="personas-modifica-procesa.php" method="post">

    <h1>Modificar usuario</h1>

    <p><a href="personas-lista-vista.php">Volver a lista</a></p>

    <input type="hidden" name="id" value="<?= $idHtml ?>">

    <label>Usuario *</label>
    <input type="text" name="usuario" value="<?= $usuarioHtml ?>" required>

    <button type="submit">Guardar</button>

    <button type="submit" formaction="personas-elimina.php"
        onclick="return confirm('¿Eliminar usuario?')">
        Eliminar
    </button>

</form>

<?php require "../multiphp/footer.php"; ?>
