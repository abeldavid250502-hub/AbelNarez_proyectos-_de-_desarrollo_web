<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Mascota | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>
<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Editar Mascota</h2>
    </div>

    <section class="section">
      <form method="POST" action="<?= site_url('CtrMascota/actualizar/'.$mascota->id); ?>" class="formulario">

        <div class="campo">
          <label>Nombre:</label>
          <input type="text" name="nombre" value="<?= $mascota->nombre ?>" required>
        </div>

        <div class="campo">
          <label>Especie:</label>
          <input type="text" name="especie" value="<?= $mascota->especie ?>" required>
        </div>

        <div class="campo">
          <label>Raza:</label>
          <input type="text" name="raza" value="<?= $mascota->raza ?>" required>
        </div>

        <div class="campo">
          <label>Edad:</label>
          <input type="number" name="edad" value="<?= $mascota->edad ?>" required>
        </div>

        <div class="campo">
          <label>Dueño:</label>
          <select name="id_cliente" required>
            <?php foreach ($clientes as $c): ?>
              <option value="<?= $c->id; ?>" <?= $mascota->id_cliente == $c->id ? 'selected' : ''; ?>>
                <?= $c->nombre; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn-accion">Actualizar Mascota</button>
        <a href="<?= site_url('CtrMascota'); ?>" class="btn-eliminar">Cancelar</a>

      </form>
    </section>

  </main>
</div>
</body>
</html>
