<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agendar Cita | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

    <!-- Sidebar del cliente -->
    <aside class="sidebar">
        <div class="logo-section">
            <img src="<?= base_url('VISTA/IMG/ArcaAnimal.jpg'); ?>" class="logo-img">
            <h2>Arca Animal</h2>
        </div>

        <ul>
            <li><a href="<?= site_url('CtrInicio'); ?>">Inicio</a></li>
            <li><a href="<?= site_url('CtrInicio/servicios'); ?>">Servicios</a></li>
            <li><a href="<?= site_url('CtrCita/agendar'); ?>" class="activo">Citas</a></li>
            <li><a href="<?= site_url('CtrLogin'); ?>">Iniciar sesión</a></li>
        </ul>
    </aside>

    <main class="main">

        <div class="banner-general">
            <h2>Agendar Cita</h2>
        </div>

        <form action="<?= site_url('CtrCita/registrarCliente'); ?>" method="POST" class="formulario">

            <div class="campo">
                <label>Tu nombre:</label>
                <input type="text" name="nombre_cliente" placeholder="Escribe tu nombre" required>
            </div>

            <div class="campo">
                <label>Tu mascota:</label>
                <input type="text" name="nombre_mascota" placeholder="Nombre de tu mascota" required>
            </div>

            <div class="campo">
                <label>Servicio:</label>
                <select name="id_servicio" required>
                    <option value="">Seleccionar</option>
                    <?php foreach ($servicios as $s): ?>
                        <option value="<?= $s->id ?>"><?= $s->nombre ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="campo">
                <label>Fecha:</label>
                <input type="date" name="fecha" required>
            </div>

            <div class="campo">
                <label>Hora:</label>
                <select name="hora" required>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                    <option value="16:00">04:00 PM</option>
                    <option value="17:00">05:00 PM</option>
                </select>
            </div>

            <button type="submit" class="btn-accion">Agendar Cita</button>

        </form>

    </main>

</div>

</body>
</html>
