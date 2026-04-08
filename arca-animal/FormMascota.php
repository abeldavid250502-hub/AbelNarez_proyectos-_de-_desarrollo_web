<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Mascota | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>
<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Registrar Nueva Mascota</h2>
    </div>

    <section class="section">
      <form method="POST" action="<?= site_url('CtrMascota/agregar'); ?>" class="formulario">

        <div class="campo">
          <label>Nombre:</label>
          <input type="text" name="nombre" required>
        </div>

        <div class="campo">
          <label>Especie:</label>
          <input type="text" name="especie" required>
        </div>

        <div class="campo">
          <label>Raza:</label>
          <input type="text" name="raza" required>
        </div>

        <div class="campo">
          <label>Edad:</label>
          <input type="number" name="edad" min="0" required>
        </div>

        <div class="campo">
          <label>Dueño:</label>
          <select name="id_cliente" required>
            <option value="">Seleccione el cliente</option>
            <?php foreach ($clientes as $c): ?>
              <option value="<?= $c->id; ?>"><?= $c->nombre; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn-accion">Guardar Mascota</button>

      </form>
    </section>

  </main>
</div>
</body>
</html>
