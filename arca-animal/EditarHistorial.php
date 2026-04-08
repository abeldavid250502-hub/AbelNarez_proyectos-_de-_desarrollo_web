<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Historial Clínico | Arca Animal</title>

    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

    <?php $this->load->view('layout/sidebar'); ?>

    <main class="main">

        <div class="banner-general">
            <h2>Editar Historial Clínico</h2>
        </div>

        <form method="POST" action="<?= site_url('CtrHistorial/actualizar/'.$historial->id); ?>" class="formulario">

            <div class="campo">
                <label>ID Mascota:</label>
                <input type="text" name="id_mascota" value="<?= $historial->id_mascota; ?>" readonly>
            </div>

            <div class="campo">
                <label>Fecha:</label>
                <input type="date" name="fecha" value="<?= $historial->fecha; ?>" required>
            </div>

            <div class="campo">
                <label>Motivo:</label>
                <input type="text" name="motivo" value="<?= $historial->motivo; ?>" required>
            </div>

            <div class="campo">
                <label>Diagnóstico:</label>
                <textarea name="diagnostico"><?= $historial->diagnostico; ?></textarea>
            </div>

            <div class="campo">
                <label>Tratamiento:</label>
                <textarea name="tratamiento"><?= $historial->tratamiento; ?></textarea>
            </div>

            <div class="campo">
                <label>Responsable:</label>
                <input type="text" name="responsable" value="<?= $historial->responsable; ?>" required>
            </div>

            <div class="campo" style="grid-column: span 2;">
                <label>Observaciones:</label>
                <textarea name="observaciones"><?= $historial->observaciones; ?></textarea>
            </div>

            <button type="submit" class="btn-accion">Guardar Cambios</button>
            <a href="<?= site_url('CtrHistorial'); ?>" class="btn-eliminar">Cancelar</a>

        </form>

    </main>

</div>

</body>
</html>
