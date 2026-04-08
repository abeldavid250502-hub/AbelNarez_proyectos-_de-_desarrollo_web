<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso denegado | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/AdminBase.css'); ?>">
</head>
<body>

<div class="container">
    <main class="main" style="display:flex;flex-direction:column;align-items:center;justify-content:center;height:100vh;">

        <h1 style="color:#e74c3c;margin-bottom:15px;">Acceso denegado</h1>

        <p style="margin-bottom:25px;font-size:1.1rem;">
            No tienes permisos para acceder a este módulo.
        </p>

        <a href="<?= site_url('CtrLogin'); ?>" 
           style="padding:10px 20px;background:#3EB489;color:white;border-radius:8px;text-decoration:none;">
            Volver al login
        </a>

    </main>
</div>

</body>
</html>
