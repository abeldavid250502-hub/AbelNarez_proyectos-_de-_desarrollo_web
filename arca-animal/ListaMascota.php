<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Mascotas | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>
<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Gestión de Mascotas</h2>
    </div>

    <section class="section">
      <h3>Lista de Mascotas Registradas</h3>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Dueño</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
        <?php if (!empty($mascotas)): ?>
          <?php foreach ($mascotas as $m): ?>
            <tr>
              <td><?= $m->id ?></td>
              <td><?= $m->nombre ?></td>
              <td><?= $m->especie ?></td>
              <td><?= $m->raza ?></td>
              <td><?= $m->edad ?></td>
              <td><?= $m->nombre_cliente ?></td>
              <td>
                <a href="<?= site_url('CtrMascota/editar/'.$m->id); ?>" class="btn-editar">Editar</a>
                <a href="<?= site_url('CtrMascota/eliminar/'.$m->id); ?>" class="btn-eliminar"
                   onclick="return confirm('¿Eliminar esta mascota?')">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="7">No hay mascotas registradas.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>

    </section>

    <!-- FORMULARIO ABAJO -->
    <section class="section">
      <h3>Agregar Nueva Mascota</h3>

      <form action="<?= site_url('CtrMascota/agregar'); ?>" method="post" class="formulario">
        
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
          <input type="number" name="edad" required>
        </div>

        <div class="campo">
          <label>Dueño:</label>
          <select name="id_cliente" required>
            <option value="">Seleccione el dueño</option>
            <?php foreach ($clientes as $cliente): ?>
              <option value="<?= $cliente->id ?>"><?= $cliente->nombre ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn-accion">Agregar Mascota</button>

      </form>
    </section>

  </main>
</div>
</body>
</html>
