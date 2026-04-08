<?php
try {
    if (!isset($_POST["apodo"]))
        throw new Exception("apodo no viene en la solicitud");

    $apodo = trim($_POST["apodo"]);

    if ($apodo === "")
        throw new Exception("apodo no puede estar en blanco");

    $resultadoHtml = htmlentities("Hola $apodo");

    require "ok.php";

} catch (Exception $error) {
    $errorHtml = htmlentities($error->getMessage());
    require "error.php";
}
