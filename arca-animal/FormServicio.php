<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Servicio | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

  <!-- SIDEBAR -->
  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Registrar Servicio</h2>
    </div>

    <form action="<?= site_url('CtrServicio/registrar'); ?>" method="POST" class="formulario">

      <!-- Nombre -->
      <div class="campo">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
      </div>

      <!-- Tipo -->
      <div class="campo">
        <label>Tipo:</label>
        <input type="text" name="tipo" required>
      </div>

      <!-- Descripción -->
      <div class="campo">
        <label>Descripción:</label>
        <textarea name="descripcion"></textarea>
      </div>

      <!-- Precio -->
      <div class="campo">
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
      </div>

      <!-- Duración -->
      <div class="campo">
        <label>Duración Estimada:</label>
        <input type="text" name="duracion_estimada">
      </div>

      <!-- Disponibilidad -->
      <div class="campo">
        <label>Disponibilidad:</label>
        <select name="disponibilidad">
          <option value="Disponible">Disponible</option>
          <option value="No disponible">No disponible</option>
        </select>
      </div>

      <!-- HORARIOS PREDETERMINADOS -->
      <div class="campo">
        <label>Horarios disponibles (8 AM - 5 PM):</label>

        <select name="horarios[]" multiple size="10" required style="height: 280px;">
          <option value="08:00">08:00 AM</option>
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

        <small style="font-size: 12px; color: #555;">
          Mantén presionada tecla CTRL para elegir varios horarios.
        </small>
      </div>

      <!-- Botón -->
      <button type="submit" class="btn-accion">Registrar Servicio</button>

    </form>

  </main>

</div>

</body>
</html>
