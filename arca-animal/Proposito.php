<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Propósito | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
</head>

<body>

<div class="contenedor">

    <header class="encabezado">
        <h1><i class="fa-solid fa-bullseye"></i> Propósito</h1>
        <p>Nuestra razón fundamental de existir como empresa.</p>
    </header>

    <section class="tarjetas">
        <article class="tarjeta grande">
            <h2>Propósito</h2>
            <p>
            En Arca Animal, nuestro propósito es crear un espacio donde cada mascota reciba la atención,
            el respeto y el amor que merece, promoviendo una conexión más consciente entre las personas y
            los animales. Buscamos transformar la forma en que se percibe el cuidado veterinario,
            convirtiéndolo en una experiencia integral que prioriza tanto la salud física como el bienestar
            emocional de cada ser vivo.
            </p>
            <p>
            Creemos firmemente que el vínculo humano-animal es una fuente inagotable de aprendizaje,
            empatía y responsabilidad social. Por ello, trabajamos cada día para ofrecer servicios médicos
            y estéticos con estándares de calidad, calidez humana y profesionalismo, al mismo tiempo que
            fomentamos la adopción responsable y la educación sobre el cuidado animal.
            </p>
            <p>
            Nuestro propósito va más allá de curar enfermedades: aspiramos a construir una comunidad que
            valore y proteja la vida, donde el respeto por los animales sea reflejo del respeto por
            nosotros mismos. Así, Arca Animal se consolida como un refugio de confianza, innovación y
            compromiso ético, que contribuye al bienestar de las familias y al desarrollo de una sociedad
            más consciente y compasiva.
            </p>
        </article>
    </section>

    <div class="acciones">

        <?php if ($interno): ?>
            <a href="<?= site_url($origen); ?>" class="btn-volver">← Volver</a>
        <?php else: ?>
            <a href="<?= site_url('CtrInicio'); ?>" class="btn-volver">← Volver</a>
        <?php endif; ?>

        <a href="<?= site_url('CtrCultura/MyV/'.$origen); ?>" class="btn-siguiente">Siguiente →</a>

    </div>

</div>

</body>
</html>
