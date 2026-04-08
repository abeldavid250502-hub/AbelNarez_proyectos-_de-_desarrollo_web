<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Clientes | Arca Animal</title>

  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminClientes.css'); ?>">
  <script src="https://kit.fontawesome.com/a2d04d6f3b.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">

  <!-- SIDEBAR DINÁMICO -->
  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      Gestión de Clientes
    </div>

    <section class="section">
      <h3>Lista de Clientes Registrados</h3>

      <form action="<?= site_url('CtrCliente'); ?>" method="GET" class="form-buscador">
        <input type="text" name="buscar" class="input-estilo" placeholder="Buscar cliente..."
               value="<?= isset($busqueda) ? $busqueda : '' ?>">
        <button type="submit" class="btn-buscar">Buscar</button>
      </form>

      <?php if (!empty($busqueda)): ?>
        <a href="<?= site_url('CtrCliente'); ?>" class="btn-regresar">Regresar</a>
      <?php endif; ?>

      <table>
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Domicilio</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($clientes as $c): ?>
          <tr>
            <td><?= $c->id ?></td>
            <td><?= $c->nombre ?></td>
            <td><?= $c->apellido_paterno ?></td>
            <td><?= $c->apellido_materno ?></td>
            <td><?= $c->domicilio ?></td>
            <td><?= $c->telefono ?></td>
            <td><?= $c->correo ?></td>

            <td>
              <a href="<?= site_url('CtrCliente/editar/'.$c->id); ?>" class="btn-editar">Editar</a>
              <a href="<?= site_url('CtrCliente/eliminar/'.$c->id); ?>"
                 onclick="return confirm('¿Eliminar este cliente?');"
                 class="btn-eliminar">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>

    <section class="section">
      <h3>Agregar Nuevo Cliente</h3>

      <?php $this->load->view('clientes/FormCliente'); ?>

    </section>

  </main>

</div>

</body>
</html>
