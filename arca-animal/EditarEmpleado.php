<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Empleado | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>
<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Editar Empleado</h2>
    </div>

    <form method="POST" action="<?= site_url('CtrEmpleado/actualizar/'.$empleado['id']); ?>" class="formulario">

      <div class="campo">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $empleado['nombre']; ?>" required>
      </div>

      <div class="campo">
        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" value="<?= $empleado['apellido_paterno']; ?>" required>
      </div>

      <div class="campo">
        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" value="<?= $empleado['apellido_materno']; ?>" required>
      </div>

      <div class="campo">
        <label>Rol:</label>
        <select name="rol" required>
          <option value="administrador" <?= $empleado['rol']=='administrador'?'selected':''; ?>>Administrador</option>
          <option value="veterinario" <?= $empleado['rol']=='veterinario'?'selected':''; ?>>Veterinario</option>
          <option value="recepcionista" <?= $empleado['rol']=='recepcionista'?'selected':''; ?>>Recepcionista</option>
        </select>
      </div>

      <div class="campo">
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= $empleado['telefono']; ?>" required>
      </div>

      <div class="campo">
        <label>Correo:</label>
        <input type="email" name="correo" value="<?= $empleado['correo']; ?>" required>
      </div>

      <div class="campo">
        <label>Cédula:</label>
        <input type="text" name="cedula" value="<?= $empleado['cedula']; ?>">
      </div>

      <div class="campo">
        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?= $empleado['usuario']; ?>" required>
      </div>

      <div class="campo">
        <label>Nueva contraseña (opcional):</label>
        <input type="password" name="contrasena" placeholder="Dejar vacío para no cambiar">
      </div>

      <button type="submit" class="btn-accion">Guardar Cambios</button>
      <a href="<?= site_url('CtrEmpleado'); ?>" class="btn-eliminar">Cancelar</a>

    </form>
  </main>

</div>
</body>
</html>
