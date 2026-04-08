<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css') ?>">
</head>
<body>

<div style="width:100%;display:flex;justify-content:center;align-items:center;height:100vh;">
    <form method="POST" action="<?= site_url('CtrLogin/procesar'); ?>" 
          style="background:white;padding:30px;border-radius:15px;width:350px;box-shadow:0 3px 10px rgba(0,0,0,0.1);">

        <h2 style="text-align:center;margin-bottom:20px;color:#3EB489;">Arca Animal - Login</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <div style="color:red;text-align:center;margin-bottom:15px;">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <label>Correo electrónico</label>
        <input type="email" name="correo" required
               style="width:100%;padding:10px;margin-bottom:15px;border-radius:8px;border:1px solid #ccc;">

        <label>Contraseña</label>
        <input type="password" name="contrasena" required
               style="width:100%;padding:10px;margin-bottom:15px;border-radius:8px;border:1px solid #ccc;">

        <button type="submit" 
                style="width:100%;padding:12px;background:#3EB489;color:white;border:none;border-radius:10px;font-weight:bold;">
            Iniciar Sesión
        </button>
    </form>
</div>

</body>
</html>
