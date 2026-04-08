<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Propósito - Arca Animal</title>

  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <div class="contenedor">

    <header class="encabezado">
      <h1><i class="fa-solid fa-bullseye"></i> Propósito</h1>
      <p>La razón fundamental que guía todas nuestras acciones en Arca Animal.</p>
    </header>

    <section class="tarjetas">

      <article class="tarjeta grande">
        <h2>Propósito</h2>
        <p>
          Es crear un espacio donde cada mascota reciba la atención, el respeto y el amor que merece, promoviendo una conexión más consciente entre las personas y los animales. Buscamos transformar la forma en que se percibe el cuidado veterinario, convirtiéndolo en una experiencia integral que prioriza tanto la salud física como el bienestar emocional de cada ser vivo.
Creemos firmemente que el vínculo humano-animal es una fuente inagotable de aprendizaje, empatía y responsabilidad social. Por ello, trabajamos cada día para ofrecer servicios médicos y estéticos con estándares de calidad, calidez humana y profesionalismo, al mismo tiempo que fomentamos la adopción responsable y la educación sobre el cuidado animal.
Nuestro propósito va más allá de curar enfermedades: aspiramos a construir una comunidad que valore y proteja la vida, donde el respeto por los animales sea reflejo del respeto por nosotros mismos. Así, Arca Animal se consolida como un refugio de confianza, innovación y compromiso ético, que contribuye al bienestar de las familias y al desarrollo de una sociedad más consciente y compasiva.
        </p>
      </article>

    </section>

    <div style="display:flex; justify-content:space-between; margin-top:25px;">
      <a href="<?= site_url('CtrInicio'); ?>" class="btn-volver">← Volver al inicio</a>
      <a href="<?= site_url('CtrCultura/MyV'); ?>" class="btn-volver" style="background:#3EB489;">Siguiente →</a>
    </div>

  </div>

</body>
</html>
