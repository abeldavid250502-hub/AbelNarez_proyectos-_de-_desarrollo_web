<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Cliente | Arca Animal</title>

  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminClientes.css'); ?>">
</head>

<body>
<div class="container">

  <!-- SIDEBAR DINÁMICO -->
  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-clientes">
      <h2>Editar Cliente</h2>
    </div>

    <form method="POST" action="<?= site_url('CtrCliente/editar/'.$cliente->id); ?>" class="formulario">

      <input type="hidden" name="id" value="<?= $cliente->id; ?>">

      <div class="campo">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $cliente->nombre; ?>" required>
      </div>

      <div class="campo">
        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" value="<?= $cliente->apellido_paterno; ?>" required>
      </div>

      <div class="campo">
        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" value="<?= $cliente->apellido_materno; ?>" required>
      </div>

      <div class="campo">
        <label>Domicilio:</label>
        <input type="text" name="domicilio" value="<?= $cliente->domicilio; ?>" required>
      </div>

      <div class="campo">
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= $cliente->telefono; ?>" required>
      </div>

      <div class="campo">
        <label>Correo:</label>
        <input type="email" name="correo" value="<?= $cliente->correo; ?>" required>
      </div>

      <button type="submit" class="btn-accion">Guardar Cambios</button>
      <a href="<?= site_url('CtrCliente'); ?>" class="btn-delete">Cancelar</a>

    </form>

  </main>
</div>
</body>
</html>
