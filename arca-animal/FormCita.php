<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cita | Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>

<body>

<div class="container">

  <?php $this->load->view('layout/sidebar'); ?>

  <main class="main">

    <div class="banner-general">
      <h2>Registrar Cita</h2>
    </div>

    <form action="<?= site_url('CtrCita/registrar'); ?>" method="POST" class="formulario">

      <!-- CLIENTE -->
      <div class="campo">
        <label>Cliente:</label>
        <select name="id_cliente" required>
          <option value="">Seleccione</option>
          <?php foreach ($clientes as $c): ?>
            <option value="<?= $c->id ?>"><?= $c->nombre ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- MASCOTA -->
      <div class="campo">
        <label>Mascota:</label>
        <select name="id_mascota" required>
          <option value="">Seleccione</option>
          <?php foreach ($mascotas as $m): ?>
            <option value="<?= $m->id ?>"><?= $m->nombre ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- SERVICIO -->
      <div class="campo">
        <label>Servicio:</label>
        <select name="id_servicio" id="servicio" required>
          <option value="">Seleccione</option>
          <?php foreach ($servicios as $s): ?>
            <option value="<?= $s->id ?>" data-horas="<?= $s->horarios ?>">
              <?= $s->nombre ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- FECHA -->
      <div class="campo">
        <label>Fecha:</label>
        <input type="date" name="fecha" required>
      </div>

      <!-- HORA DINÁMICA -->
      <div class="campo">
        <label>Hora:</label>
        <select name="hora" id="horas" required></select>
      </div>

      <button type="submit" class="btn-accion">Registrar Cita</button>

    </form>

  </main>

</div>

<script>
// Cargar horas cuando cambie el servicio
document.getElementById('servicio').addEventListener('change', function() {
    let horas = this.options[this.selectedIndex].dataset.horas;
    let lista = horas.split(",");
    
    let selectHoras = document.getElementById("horas");
    selectHoras.innerHTML = "";

    lista.forEach(function(h){
        let op = document.createElement("option");
        op.value = h;
        op.textContent = h;
        selectHoras.appendChild(op);
    });
});
</script>

</body>
</html>
