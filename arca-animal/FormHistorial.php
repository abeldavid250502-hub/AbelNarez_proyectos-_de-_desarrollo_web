<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Historial Clínico | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>
<div class="container">

    <?php $this->load->view('layout/sidebar'); ?>

    <main class="main">

        <div class="banner-general">
            <h2>Registrar Historial Clínico</h2>
        </div>

        <form method="POST" action="<?= site_url('CtrHistorial/registrar'); ?>" class="formulario">

            <div class="campo">
                <label>ID Mascota:</label>
                <input type="number" name="id_mascota" required>
            </div>

            <div class="campo">
                <label>Fecha:</label>
                <input type="date" name="fecha" required>
            </div>

            <div class="campo">
                <label>Motivo:</label>
                <select name="motivo" required>
                    <option value="">Seleccione</option>
                    <option value="Consulta general">Consulta general</option>
                    <option value="Vacunación">Vacunación</option>
                    <option value="Cirugía">Cirugía</option>
                    <option value="Control de salud">Control de salud</option>
                    <option value="Emergencia">Emergencia</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="campo">
                <label>Diagnóstico:</label>
                <textarea name="diagnostico" rows="3" required></textarea>
            </div>

            <div class="campo">
                <label>Tratamiento:</label>
                <textarea name="tratamiento" rows="3"></textarea>
            </div>

            <div class="campo">
                <label>Responsable:</label>
                <input type="text" name="responsable" required>
            </div>

            <div class="campo" style="grid-column: span 2;">
                <label>Observaciones:</label>
                <textarea name="observaciones" rows="3"></textarea>
            </div>

            <button type="submit" class="btn-accion">Registrar</button>

        </form>

    </main>
</div>
</body>
</html>

