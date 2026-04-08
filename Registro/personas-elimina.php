<?php
require "Bd.php";

$id = $_POST["id"];

$pdo = Bd::pdo();
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->execute([$id]);

header("Location: personas-lista-vista.php");
