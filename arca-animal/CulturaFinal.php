<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filosofía y Valores - Arca Animal</title>

  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <div class="contenedor">

    <header class="encabezado">
      <h1><i class="fa-solid fa-lightbulb"></i> Filosofía Empresarial y Valores</h1>
      <p>Principios que nos guían y definen nuestro actuar como organización</p>
    </header>

    <section class="tarjetas">

      <article class="tarjeta">
        <h2>Filosofía Empresarial</h2>
        <p>
          En Arca Animal creemos que cada mascota es un ser único que merece atención, respeto y amor. Nuestra filosofía se basa en el compromiso ético y profesional de ofrecer servicios veterinarios de calidad que promuevan el bienestar físico y emocional de los animales, fortaleciendo a la vez el vínculo que une a las familias con sus compañeros de vida.
Fomentamos un ambiente laboral positivo, colaborativo y empático, donde cada integrante del equipo se sienta motivado a crecer personal y profesionalmente, compartiendo la misma pasión por el cuidado y la protección de los animales.
Actuamos guiados por nuestros valores, buscando siempre la mejora continua, la innovación en los servicios, la educación responsable y el respeto por todas las formas de vida. Así, Arca Animal se consolida no solo como una clínica veterinaria, sino como una familia comprometida con el amor, la salud y la armonía entre humanos y animales.
        </p>
      </article>

      <article class="tarjeta">
        <h2>Valores</h2>
        <ul>
          <li>❤️ Amor por los animales</li>
          <li>🤝 Empatía y respeto</li>
          <li>⚕️ Profesionalismo</li>
          <li>🌱 Mejora continua</li>
          <li>🔍 Transparencia</li>
        </ul>
      </article>

    </section>

    <div style="display:flex; justify-content:space-between; margin-top:25px;">
      <a href="<?= site_url('CtrCultura/MyV'); ?>" class="btn-volver">← Anterior</a>
      <a href="<?= site_url('CtrInicio'); ?>" class="btn-volver" style="background:#3EB489;">Volver al inicio</a>
    </div>

  </div>

</body>
</html>
