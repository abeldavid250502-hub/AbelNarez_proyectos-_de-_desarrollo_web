<?php require "../multiphp/header.php"; ?>
<?php require "navegacion.php"; ?>

<form action="procesapost.php" method="post">
<main>

    <h1>Formulario POST</h1>

    <p>
        <label>
            Nombre
            <input type="text" name="apodo">
        </label>
    </p>

    <p><button type="submit">Procesar</button></p>

</main>
</form>

<?php require "../multiphp/footer.php"; ?>
