<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Cita | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Editar Cita</h2>
    </div>

    <form action="<?= site_url('CtrCita/actualizar/'.$cita->id_cita); ?>" method="POST" class="formulario">

      <div class="campo">
        <label>Cliente:</label>
        <select name="id_cliente" required>
          <?php foreach ($clientes as $c): ?>
            <option value="<?= $c->id ?>"
              <?= ($c->id == $cita->id_cliente) ? 'selected' : '' ?>>
              <?= $c->nombre ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="campo">
        <label>Mascota:</label>
        <select name="id_mascota" required>
          <?php foreach ($mascotas as $m): ?>
            <option value="<?= $m->id ?>"
              <?= ($m->id == $cita->id_mascota) ? 'selected' : '' ?>>
              <?= $m->nombre ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="campo">
        <label>Servicio:</label>
        <select name="id_servicio" id="servicio" required>
          <?php foreach ($servicios as $s): ?>
            <option value="<?= $s->id ?>"
              data-horas="<?= $s->horarios ?>"
              <?= ($s->id == $cita->id_servicio) ? 'selected' : '' ?>>
              <?= $s->nombre ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="campo">
        <label>Fecha:</label>
        <input type="date" name="fecha" value="<?= $cita->fecha ?>" required>
      </div>

      <div class="campo">
        <label>Hora:</label>
        <select name="hora" id="horas" required></select>
      </div>

      <button type="submit" class="btn-accion">Actualizar Cita</button>

    </form>

  </main>

</div>

<script>
// Seleccionar servicio y cargar horarios
let servicioSelect = document.getElementById('servicio');
let horasSelect = document.getElementById('horas');
let horaActual = "<?= $cita->hora ?>";

function cargarHoras() {
    let horas = servicioSelect.options[servicioSelect.selectedIndex].dataset.horas.split(",");
    horasSelect.innerHTML = "";
    horas.forEach(h => {
        let op = document.createElement("option");
        op.value = h;
        op.textContent = h;
        if (h == horaActual) op.selected = true;
        horasSelect.appendChild(op);
    });
}

servicioSelect.addEventListener('change', cargarHoras);
cargarHoras(); 
</script>

</body>
</html>
