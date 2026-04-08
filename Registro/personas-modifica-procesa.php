<?php
require "Bd.php";

$id = $_POST["id"] ?? null;
$usuario = $_POST["usuario"] ?? "";
$password = $_POST["password"] ?? "";

if (!$id || $usuario === "") {
    die("Datos incompletos");
}

$pdo = Bd::pdo();

// Si se escribió nueva contraseña → actualizar con hash
if ($password !== "") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE usuarios SET usuario = ?, password = ? WHERE id = ?");
    $stmt->execute([$usuario, $hash, $id]);
} else {
    // Solo cambiar nombre
    $stmt = $pdo->prepare("UPDATE usuarios SET usuario = ? WHERE id = ?");
    $stmt->execute([$usuario, $id]);
}

// 🔥 Redirige a la lista de usuarios
header("Location: personas-lista-vista.php");
exit;
