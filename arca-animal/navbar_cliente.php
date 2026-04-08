<nav class="navbar-cliente">

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">
        ☰
    </label>

    <div class="menu-desplegable">
        <a href="<?= site_url('CtrInicio'); ?>">Inicio</a>
        <a href="<?= site_url('CtrInicio/servicios'); ?>">Servicios</a>
        <a href="<?= site_url('CtrInicio/ubicacion'); ?>">Ubicación</a>
        <a href="<?= site_url('CtrCita/agendar'); ?>">Citas</a>
        <a href="<?= site_url('CtrLogin'); ?>">Iniciar sesión</a>
    </div>

    <div class="logo-navbar">
        <img src="<?= base_url('VISTA/IMG/ArcaAnimal.jpg'); ?>" alt="Logo">
    </div>

</nav>

<style>
/* Fondo del navbar */
.navbar-cliente {
    width: 100%;
    background: linear-gradient(90deg, #66cdaa, #9370db);
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Icono menú */
.menu-icon {
    font-size: 28px;
    cursor: pointer;
    color: white;
}

/* Logo */
.logo-navbar img {
    width: 60px;
    border-radius: 10px;
}

/* Ocultar checkbox */
#menu-toggle { display: none; }

/* Menú desplegable */
.menu-desplegable {
    position: absolute;
    top: 70px;
    left: 0;
    background: white;
    width: 220px;
    display: none;
    flex-direction: column;
    padding: 10px;
    border-radius: 0 0 8px 8px;
    box-shadow: 0px 3px 8px rgba(0,0,0,0.2);
}

.menu-desplegable a {
    padding: 12px;
    font-size: 16px;
    color: #444;
    text-decoration: none;
    border-bottom: 1px solid #eee;
}

.menu-desplegable a:hover {
    background: #f3f3f3;
}

/* Mostrar menú cuando se activa */
#menu-toggle:checked + .menu-icon + .menu-desplegable {
    display: flex;
}
</style>
