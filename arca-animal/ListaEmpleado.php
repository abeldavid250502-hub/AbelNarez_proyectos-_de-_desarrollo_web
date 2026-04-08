<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Empleados | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Gestión de Empleados</h2>
    </div>

    <section class="section">
      <h3>Lista de Empleados</h3>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Rol</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Cédula</th>
            <th>Usuario</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($empleados as $e): ?>
            <tr>
              <td><?= $e['id'] ?></td>
              <td><?= $e['nombre'] ?></td>
              <td><?= $e['apellido_paterno'] ?></td>
              <td><?= $e['apellido_materno'] ?></td>
              <td><?= $e['rol'] ?></td>
              <td><?= $e['telefono'] ?></td>
              <td><?= $e['correo'] ?></td>
              <td><?= $e['cedula'] ?></td>
              <td><?= $e['usuario'] ?></td>
              <td>
                <a href="<?= site_url('CtrEmpleado/editar/'.$e['id']); ?>" class="btn-editar">Editar</a>
                <a href="<?= site_url('CtrEmpleado/eliminar/'.$e['id']); ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar empleado?')">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </section>


    <!-- FORM AGREGAR EMPLEADO -->
    <section class="section">
      <h3>Registrar Nuevo Empleado</h3>

      <form method="POST" action="<?= site_url('CtrEmpleado/registrar'); ?>" class="formulario">

        <div class="campo">
          <label>Nombre:</label>
          <input type="text" name="nombre" required>
        </div>

        <div class="campo">
          <label>Paterno:</label>
          <input type="text" name="apellido_paterno" required>
        </div>

        <div class="campo">
          <label>Materno:</label>
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
          <input type="password" name="contrasena" required>
        </div>

        <button type="submit" class="btn-accion">Agregar</button>

      </form>
    </section>

  </main>

</div>
</body>
</html>
