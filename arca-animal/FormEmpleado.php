<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Empleado | Arca Animal</title>

  <!-- CSS BASE GENERAL -->
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminEmpleados.css'); ?>">

</head>

<body>
<div class="container">

  <!-- Sidebar dinámico según el rol -->
  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      Registrar Empleado
    </div>

    <!-- FORMULARIO -->
    <form method="POST" action="<?= site_url('CtrEmpleado/registrar'); ?>" class="formulario">

      <div class="campo">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
      </div>

      <div class="campo">
        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" required>
      </div>

      <div class="campo">
        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" required>
      </div>

      <div class="campo">
        <label>Rol:</label>
        <select name="rol" required>
          <option value="">Seleccione...</option>
          <option value="administrador">Administrador</option>
          <option value="veterinario">Veterinario</option>
          <option value="recepcionista">Recepcionista</option>
        </select>
      </div>

      <div class="campo">
        <label>Teléfono:</label>
        <input type="text" name="telefono" maxlength="10" required>
      </div>

      <div class="campo">
        <label>Correo:</label>
        <input type="email" name="correo" required>
      </div>

      <div class="campo">
        <label>Cédula:</label>
        <input type="text" name="cedula">
      </div>

      <div class="campo">
        <label>Usuario:</label>
        <input type="text" name="usuario" required>
      </div>

      <div class="campo">
        <label>Contraseña:</label>
        <input type="password" name="contrasena" minlength="6" required>
      </div>

      <button type="submit" class="btn-accion">Registrar Empleado</button>

    </form>

  </main>

</div>
</body>
</html>
