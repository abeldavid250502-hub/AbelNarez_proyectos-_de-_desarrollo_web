<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Organigrama | Arca Animal</title>

    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="contenedor">

    <header class="encabezado">
        <h1><i class="fa-solid fa-sitemap"></i> Organigrama</h1>
        <p>Estructura organizacional y tamaño de la empresa Arca Animal.</p>
    </header>

    <section class="tarjetas">

        <article class="tarjeta grande">
            <h2>Tamaño de la Empresa y Organigrama</h2>

            <p>
                Arca Animal se clasifica como una <strong>empresa mediana</strong>, ya que cuenta con 
                <strong>25 empleados</strong> distribuidos en diversas áreas como:
            </p>

            <ul>
                <li>📦 Gerencia administrativa</li>
                <li>🐾 Gerencia médica veterinaria</li>
                <li>📋 Recepción y atención al cliente</li>
                <li>🧼 Servicios generales</li>
            </ul>

            <hr style="margin:20px 0; opacity:0.3;">

            <h3 style="color:#3EB489;">Organigrama general</h3>
            <p>A continuación se muestra la estructura organizacional:</p>

            <div class="organigrama-img">
                <img src="<?= base_url('VISTA/IMG/organigrama.jpg'); ?>" alt="Organigrama de Arca Animal">
            </div>

        </article>

    </section>

    <div class="acciones">
        <a href="<?= site_url('CtrCultura/Final/'.$origen); ?>" class="btn-volver">← Anterior</a>
        <a href="<?= site_url($origen); ?>" class="btn-siguiente">Volver</a>
    </div>

</div>

</body>
</html>
