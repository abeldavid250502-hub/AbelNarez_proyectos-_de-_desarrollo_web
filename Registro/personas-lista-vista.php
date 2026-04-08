<?php
require "../multiphp/header.php";
require "Bd.php";

try {
    $pdo = Bd::pdo();
    $stmt = $pdo->query("SELECT id, usuario FROM usuarios ORDER BY usuario");
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>

<h1>Usuarios</h1>

<p><a href="personas-agrega.php">Agregar usuario</a></p>

<ul>
<?php foreach ($lista as $u) : ?>
    <li>
        <a href="personas-busca.php?id=<?= $u['id'] ?>">
            <?= htmlentities($u['usuario']) ?>
        </a>
    </li>
<?php endforeach ?>
</ul>

<?php require "../multiphp/footer.php"; ?>
