<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arca Animal</title>
  <link rel="stylesheet" href="<?= base_url('VISTA/CSS/EstiloInicio.css'); ?>">
  <script src="https://kit.fontawesome.com/a2e0e6cf2b.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">

    <!-- Menú lateral -->
    <aside class="sidebar">
      <div class="logo">
        <button class="logo-btn">
          <img src="<?= base_url('VISTA/IMG/ArcaAnimal.jpg'); ?>" alt="Arca Animal">
          <h1>Arca Animal</h1>
        </button>

        <nav class="nav-menu">
          <ul>
            <li class="active">
              <a href="<?= site_url('CtrInicio'); ?>">
                <i class="fa-solid fa-house"></i>Inicio
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa-solid fa-stethoscope"></i>Servicios
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa-solid fa-location-dot"></i>Ubicación
              </a>
            </li>

          

            <!-- CULTURA (NUEVA VISTA) -->
            <li>
              <a href="<?= site_url('CtrCultura'); ?>">
                <i class="fa-solid fa-book-open"></i>Sobre nosotros 
              </a>
            </li>

            <!-- RUTA CORREGIDA -->
            <li>
              <a href="<?= site_url('CtrCita/agregar'); ?>">
                <i class="fa-solid fa-calendar-check"></i>Citas
              </a>
            </li>

            <li>
              <a href="<?= site_url('CtrLogin'); ?>">
                <i class="fa-solid fa-user"></i>Iniciar sesión
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </aside>

    <!-- Contenido principal -->
    <main class="main-content">

      <!-- Banner Personalizado -->
      <section class="banner-personalizado">
        <img src="<?= base_url('VISTA/IMG/Banner3.jpg'); ?>" alt="Banner Arca Animal">
      </section>

      <!-- Hero -->
      <section class="hero">
        <div class="hero-text">
          <h2>¡Cuidamos con amor a tus mascotas! 💚</h2>
          <p>En <strong>Arca Animal</strong> nos preocupamos por su bienestar, salud y felicidad.</p>

          <!-- RUTA CORREGIDA -->
          <a href="<?= site_url('CtrCita/agregar'); ?>" class="btn-accion">
            Agendar cita
          </a>
        </div>

        <div class="hero-img">
          <img src="<?= base_url('VISTA/IMG/perritoCuatro.jpg'); ?>" alt="Perro y gato felices">
        </div>
      </section>

      <!-- Servicios -->
      <section class="seccion servicios">
        <h3>Servicios Veterinarios</h3>
        <div class="cards-servicios">

          <div class="card">
            <i class="fa-solid fa-syringe"></i>
            <h4>Vacunación</h4>
            <p>Protege a tu mascota con nuestras campañas de vacunación.</p>
            <a href="#" class="btn-accion">Ver servicio</a>
          </div>

          <div class="card">
            <i class="fa-solid fa-scissors"></i>
            <h4>Estética</h4>
            <p>Baños, cortes y limpieza para que luzcan radiantes.</p>
            <a href="#" class="btn-accion">Ver servicio</a>
          </div>

          <div class="card">
            <i class="fa-solid fa-heart-pulse"></i>
            <h4>Consulta médica</h4>
            <p>Atención profesional para cuidar su salud en todo momento.</p>
            <a href="#" class="btn-accion">Ver servicio</a>
          </div>

        </div>
      </section>

      <!-- ========================== -->
      <!-- SECCIÓN SOBRE NOSOTROS -->
      <!-- ========================== -->
      <section id="sobreNosotros" class="seccion sobre-nosotros">
        <h3>Sobre nosotros</h3>
        <p>
           <strong>Arca Animal</strong> es una clínica veterinaria comprometida con el bienestar integral de las mascotas, ofreciendo servicios médicos, estéticos y preventivos con un enfoque humano, ético y profesional. Nos dedicamos a brindar atención de calidad basada en el respeto, el amor por los animales y la responsabilidad hacia sus familias, garantizando una experiencia cercana, segura y confiable.

Contamos con un equipo de especialistas altamente capacitados y apasionados por la vida animal, respaldados por tecnología moderna que permite diagnósticos precisos y tratamientos efectivos. En Arca Animal promovemos la adopción responsable, la educación sobre el cuidado animal y la construcción de una comunidad más consciente y empática con todas las especies.

Nuestra prioridad es crear un entorno donde cada mascota reciba un trato digno, cálido y personalizado, consolidándonos como un espacio de confianza, profesionalismo e innovación al servicio del bienestar animal.
      
        </p>

        <!-- BOTÓN LEER MÁS QUE ABRE LA VISTA COMPLETA -->
        <a href="<?= site_url('CtrCultura'); ?>" class="btn-accion leer-mas">
          Leer más
        </a>
      </section>

      <!-- Footer -->
      <footer class="footer">
        <div class="contact-info">
          <p><i class="fa-solid fa-phone"></i> Tel: 55 63226411</p>
          <p><i class="fa-solid fa-envelope"></i> arcaAnimal@hotmail.com</p>
          <p><i class="fa-solid fa-location-dot"></i> Ciudad Nezahualcóyotl, Edo. de México</p>
          <p>© ArcaAnimal Company S.A de C.V</p>
        </div>

        <div class="social">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
      </footer>

    </main>
  </div>
</body>
</html>
