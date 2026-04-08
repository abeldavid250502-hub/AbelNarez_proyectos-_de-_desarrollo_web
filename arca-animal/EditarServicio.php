<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Servicio | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
  <script src="https://kit.fontawesome.com/a2d04d6f3b.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Editar Servicio</h2>
    </div>

    <section class="form-section">

      <form action="<?= site_url('CtrServicio/actualizar/'.$servicio['id']); ?>" method="POST" class="formulario">

        <div class="campo">
          <label>Nombre del Servicio:</label>
          <input type="text" name="nombre" value="<?= $servicio['nombre']; ?>" required>
        </div>

        <div class="campo">
          <label>Tipo:</label>
          <input type="text" name="tipo" value="<?= $servicio['tipo']; ?>" required>
        </div>

        <div class="campo">
          <label>Descripción:</label>
          <textarea name="descripcion" rows="3"><?= $servicio['descripcion']; ?></textarea>
        </div>

        <div class="campo">
          <label>Precio:</label>
          <input type="number" step="0.01" name="precio" value="<?= $servicio['precio']; ?>" required>
        </div>

        <div class="campo">
          <label>Duración Estimada:</label>
          <input type="text" name="duracion_estimada" value="<?= $servicio['duracion_estimada']; ?>">
        </div>

        <div class="campo">
          <label>Disponibilidad:</label>
          <input type="text" name="disponibilidad" value="<?= $servicio['disponibilidad']; ?>">
        </div>

        <button type="submit" class="btn-accion">Guardar Cambios</button>
        <a href="<?= site_url('CtrServicio'); ?>" class="btn-eliminar">Cancelar</a>

      </form>

    </section>

  </main>

</div>

</body>
</html>
