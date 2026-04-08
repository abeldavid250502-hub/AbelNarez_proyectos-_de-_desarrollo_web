<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Citas | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Listado de Citas</h2>
    </div>

    <a href="<?= site_url('CtrCita/agregar'); ?>" class="btn-accion">Nueva Cita</a>

    <!-- FILTRO DE FECHAS -->
    <form method="GET" class="formulario" style="margin-top:15px;">
      <div class="campo">
        <label>Buscar por fecha:</label>
        <input type="date" name="filtro" value="<?= isset($_GET['filtro']) ? $_GET['filtro'] : '' ?>">
      </div>
      <button class="btn-accion" style="margin-left:10px;">Filtrar</button>
    </form>

    <table class="tabla-datos">
      <thead>
        <tr>
          <th>Cliente</th>
          <th>Mascota</th>
          <th>Servicio</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($citas as $c): 

            // Filtrar si hay filtro
            if(isset($_GET['filtro']) && $_GET['filtro'] != ''){
                if($c->fecha != $_GET['filtro']) continue;
            }
        ?>
        <tr>
          <td><?= $c->cliente ?></td>
          <td><?= $c->mascota ?></td>
          <td><?= $c->servicio ?></td>
          <td><?= $c->fecha ?></td>
          <td><?= $c->hora ?></td>

          <td>
            <?php if ($c->estado == 'Pendiente'): ?>
                <span style="color:#d35400;font-weight:bold;">Pendiente</span>
            <?php else: ?>
                <span style="color:#27ae60;font-weight:bold;">Finalizada</span>
            <?php endif; ?>
          </td>

          <td>

            <a href="<?= site_url('CtrCita/editar/'.$c->id_cita); ?>" class="btn-editar">
              Editar
            </a>

            <?php if ($c->estado != 'Finalizada'): ?>
            <a href="<?= site_url('CtrCita/finalizar/'.$c->id_cita); ?>" 
               onclick="return confirm('¿Finalizar cita?');"
               class="btn-finalizar">Finalizar</a>
            <?php endif; ?>

            <a href="<?= site_url('CtrCita/eliminar/'.$c->id_cita); ?>"
               onclick="return confirm('¿Eliminar esta cita?');"
               class="btn-eliminar">Eliminar</a>

          </td>

        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </main>

</div>

</body>
</html>
