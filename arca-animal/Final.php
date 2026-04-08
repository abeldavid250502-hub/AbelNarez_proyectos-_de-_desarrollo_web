<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filosofía Empresarial | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
</head>

<body>

<div class="contenedor">

    <header class="encabezado">
        <h1><i class="fa-solid fa-lightbulb"></i> Filosofía Empresarial</h1>
        <p>Los principios que guían nuestra forma de trabajar.</p>
    </header>

    <section class="tarjetas">

        <article class="tarjeta grande">
            <h2>Filosofía Empresarial</h2>
            <p>
            En Arca Animal creemos que cada mascota es un ser único que merece atención, respeto y amor.
            Nuestra filosofía se basa en el compromiso ético y profesional de ofrecer servicios
            veterinarios de calidad que promuevan el bienestar físico y emocional de los animales,
            fortaleciendo el vínculo con las familias.
            </p>
            <p>
            Fomentamos un ambiente laboral positivo, colaborativo y empático, donde cada integrante del equipo
            se sienta motivado a crecer personal y profesionalmente, compartiendo la misma pasión por el cuidado
            y la protección de los animales.
            </p>
            <p>
            Actuamos guiados por nuestros valores, buscando siempre la mejora continua, la innovación,
            la educación responsable y el respeto por todas las formas de vida.
            </p>
        </article>

    </section>

    <div class="acciones">

        <a href="<?= site_url('CtrCultura/MyV/'.$origen); ?>" class="btn-volver">← Anterior</a>

        <?php if ($interno): ?>
            <a href="<?= site_url('CtrCultura/Organigrama/'.$origen); ?>" class="btn-siguiente">Siguiente →</a>
        <?php else: ?>
            <a href="<?= site_url('CtrInicio'); ?>" class="btn-siguiente">Volver</a>
        <?php endif; ?>

    </div>

</div>

</body>
</html>
