<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Misión y Visión | Arca Animal</title>
    <link rel="stylesheet" href="<?= base_url('VISTA/CSS/Cultura.css'); ?>">
</head>

<body>

<div class="contenedor">

    <header class="encabezado">
        <h1><i class="fa-solid fa-seedling"></i> Misión y Visión</h1>
        <p>Nuestro camino y dirección estratégica.</p>
    </header>

    <section class="tarjetas">

        <article class="tarjeta">
            <h2>Misión</h2>
            <p>
            En Arca Animal tenemos como misión brindar servicios veterinarios integrales que garanticen la
            salud, el bienestar y la felicidad de las mascotas, ofreciendo atención médica, estética y
            preventiva de alta calidad.
            </p>
            <p>
            Nos comprometemos a proporcionar un trato humano, empático y profesional tanto a los animales
            como a sus dueños, creando una experiencia de confianza y cercanía. Contamos con un equipo
            de especialistas apasionados por la vida, capacitados continuamente y respaldados por
            tecnología moderna.
            </p>
            <p>
            Además, fomentamos la adopción responsable, la educación sobre el cuidado animal y el respeto
            por todas las especies, contribuyendo activamente al desarrollo de una comunidad más
            consciente, solidaria y comprometida con el bienestar animal.
            </p>
        </article>

        <article class="tarjeta">
            <h2>Visión</h2>
            <p>
            En Arca Animal aspiramos a consolidarnos como la clínica veterinaria líder y referente en
            bienestar animal dentro de nuestra comunidad y la región, reconocida por su compromiso ético,
            excelencia en el servicio y enfoque humano hacia cada mascota y su familia.
            </p>
            <p>
            Buscamos ser una organización innovadora y sostenible, que combine la tecnología con la empatía
            para ofrecer atención integral, oportuna y personalizada.
            </p>
            <p>
            Proyectamos un futuro donde Arca Animal sea un símbolo de confianza, amor y respeto por todas
            las formas de vida.
            </p>
        </article>

    </section>

    <div class="acciones">
        <a href="<?= site_url('CtrCultura/index/'.$origen); ?>" class="btn-volver">← Anterior</a>
        <a href="<?= site_url('CtrCultura/Final/'.$origen); ?>" class="btn-siguiente">Siguiente →</a>
    </div>

</div>

</body>
</html>
