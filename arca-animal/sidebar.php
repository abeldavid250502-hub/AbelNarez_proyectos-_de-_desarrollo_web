<?php
$rol = $this->session->userdata('rol');
?>

<aside class="sidebar">
    <div class="logo-section">
        <img src="<?= base_url('VISTA/IMG/ArcaAnimal.jpg'); ?>" class="logo-img">
        <h2>Arca Animal</h2>
    </div>

    <ul>

        <?php if ($rol == 'administrador' || $rol == 'recepcionista'): ?>
            <li><a href="<?= site_url('CtrCliente'); ?>">Clientes</a></li>
        <?php endif; ?>

        <?php if ($rol == 'administrador' || $rol == 'recepcionista'): ?>
            <li><a href="<?= site_url('CtrServicio'); ?>">Servicios</a></li>
        <?php endif; ?>

        <?php if ($rol == 'administrador' || $rol == 'veterinario' || $rol == 'recepcionista'): ?>
            <li><a href="<?= site_url('CtrMascota'); ?>">Mascotas</a></li>
        <?php endif; ?>

        <?php if ($rol == 'administrador' || $rol == 'veterinario' || $rol == 'recepcionista'): ?>
            <li><a href="<?= site_url('CtrHistorial'); ?>">Historial</a></li>
        <?php endif; ?>

        <?php if ($rol == 'administrador' || $rol == 'veterinario' || $rol == 'recepcionista'): ?>
            <li><a href="<?= site_url('CtrCita'); ?>">Citas</a></li>
        <?php endif; ?>

        <?php if ($rol == 'administrador'): ?>
            <li><a href="<?= site_url('CtrEmpleado'); ?>">Empleados</a></li>
        <?php endif; ?>

        <!-- ACCESO A CULTURA PARA TODOS LOS CRUD -->
        <li>
            <a href="<?= site_url('CtrCultura/index/' . uri_string()); ?>">
                Sobre nosotros 
            </a>
        </li>

        <li><a href="<?= site_url('CtrLogin/logout'); ?>" class="cerrar-sesion">Salir</a></li>

    </ul>
</aside>
