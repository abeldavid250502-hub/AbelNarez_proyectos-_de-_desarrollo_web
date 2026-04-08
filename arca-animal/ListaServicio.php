<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Servicios | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
  <script src="https://kit.fontawesome.com/a2d04d6f3b.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Gestión de Servicios</h2>
    </div>

    <section class="tabla-section">
      <h3>Lista de Servicios</h3>

      <table class="tabla-empleados">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Duración</th>
            <th>Disponibilidad</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
        <?php if (!empty($servicios)): ?>
          <?php foreach ($servicios as $s): ?>
            <tr>
              <td><?= $s->id; ?></td>
              <td><?= htmlspecialchars($s->nombre); ?></td>
              <td><?= htmlspecialchars($s->tipo); ?></td>
              <td><?= htmlspecialchars($s->descripcion); ?></td>
              <td>$<?= number_format($s->precio, 2); ?></td>
              <td><?= htmlspecialchars($s->duracion_estimada); ?></td>
              <td><?= htmlspecialchars($s->disponibilidad); ?></td>

              <td>
                <a href="<?= site_url('CtrServicio/editar/'.$s->id); ?>" class="btn-editar">Editar</a>
                <a href="<?= site_url('CtrServicio/eliminar/'.$s->id); ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar servicio?')">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="8">No hay servicios registrados.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>

    </section>

    <section class="form-section">

      <h3>Agregar Nuevo Servicio</h3>

      <form action="<?= site_url('CtrServicio/registrar'); ?>" method="POST" class="formulario">

        <div class="campo">
          <label>Nombre:</label>
          <input type="text" name="nombre" required>
        </div>

        <div class="campo">
          <label>Tipo:</label>
          <input type="text" name="tipo" required>
        </div>

        <div class="campo">
          <label>Descripción:</label>
          <textarea name="descripcion"></textarea>
        </div>

        <div class="campo">
          <label>Precio:</label>
          <input type="number" name="precio" step="0.01" required>
        </div>

        <div class="campo">
          <label>Duración Estimada:</label>
          <input type="text" name="duracion_estimada">
        </div>

        <div class="campo">
          <label>Disponibilidad:</label>
          <input type="text" name="disponibilidad">
        </div>

        <button type="submit" class="btn-accion">Agregar Servicio</button>

      </form>

    </section>

  </main>

</div>

</body>
</html>
