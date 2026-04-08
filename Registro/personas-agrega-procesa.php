<?php
require "Bd.php";

$pdo = Bd::pdo();
$usuario = trim($_POST["usuario"]);
$password = trim($_POST["password"]);

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO usuarios(usuario, password) VALUES (?, ?)");
$stmt->execute([$usuario, $hash]);

header("Location: personas-lista-vista.php");
