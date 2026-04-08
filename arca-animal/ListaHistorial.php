<?php $this->load->view('layout/sidebar'); ?>

<div class="main">
    
    <!-- BANNER -->
    <div class="banner-general">
        Gestión de Historial Clínico
    </div>

    <!-- LISTA DE HISTORIALES -->
    <div class="section">
        <h3>Lista de Historiales</h3>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Mascota</th>
                    <th>Fecha</th>
                    <th>Motivo</th>
                    <th>Diagnóstico</th>
                    <th>Tratamiento</th>
                    <th>Responsable</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($historiales)): ?>
                    <?php foreach ($historiales as $h): ?>
                        <tr>
                            <td><?= $h['id'] ?></td>
                            <td><?= $h['id_mascota'] ?></td>
                            <td><?= $h['fecha'] ?></td>
                            <td><?= $h['motivo'] ?></td>
                            <td><?= $h['diagnostico'] ?></td>
                            <td><?= $h['tratamiento'] ?></td>
                            <td><?= $h['responsable'] ?></td>
                            <td><?= $h['observaciones'] ?></td>
                            <td>
                                <a href="<?= site_url('CtrHistorial/ver/'.$h['id']) ?>" class="btn-editar">Editar</a>
                                <a href="<?= site_url('CtrHistorial/eliminar/'.$h['id']) ?>" class="btn-eliminar">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No hay historiales registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- FORMULARIO REGISTRO -->
    <div class="section">
        <h3>Registrar Historial Clínico</h3>

        <form action="<?= site_url('CtrHistorial/registrar') ?>" method="POST" class="formulario">

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
                <input type="text" name="motivo" required>
            </div>

            <div class="campo">
                <label>Diagnóstico:</label>
                <textarea name="diagnostico" required></textarea>
            </div>

            <div class="campo">
                <label>Tratamiento:</label>
                <textarea name="tratamiento" required></textarea>
            </div>

            <div class="campo">
                <label>Responsable:</label>
                <input type="text" name="responsable" required>
            </div>

            <div class="campo" style="grid-column: span 2;">
                <label>Observaciones:</label>
                <textarea name="observaciones"></textarea>
            </div>

            <button type="submit" class="btn-accion" style="grid-column: span 2;">Registrar</button>

        </form>
    </div>

</div>

<link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css') ?>">
