<form action="<?= site_url('CtrCliente/agregar'); ?>" method="POST" class="form-cliente">

  <input type="text" name="nombre" class="input-estilo" placeholder="Nombre" required>

  <input type="text" name="apellido_paterno" class="input-estilo" placeholder="Apellido Paterno" required>

  <input type="text" name="apellido_materno" class="input-estilo" placeholder="Apellido Materno" required>

  <input type="text" name="domicilio" class="input-estilo" placeholder="Domicilio" required>

  <input type="text" name="telefono" class="input-estilo" placeholder="Teléfono" required>

  <input type="email" name="correo" class="input-estilo" placeholder="Correo" required>

  <button type="submit" class="btn-agregar">Guardar Cliente</button>

</form>
