<div class="header_sidebar" id="header-sidebar">
    <div class="header_toggle">
        <i class="fa-regular fa-bars" id="header-toggle"></i>
    </div>
    <div class="header_options">
        <div class="option_input">
            <input class="input_search">
        </div>
        <div class="option_search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="option_notification">
            <i class="fa-regular fa-bell"></i>
            <div class="notification_number">
                <span>1</span>
            </div>
        </div>
        <div class="option_profile">
            <div class="profile_image">
                <img src="https://avatars.githubusercontent.com/u/90335295?v=4" alt="Foto de perfil">
            </div>
            <div class="profile_data">
                <div class="data_name">
                    <span>Jesús I.V</span>
                </div>
                <div class="data_role">
                    <span>Super administrador</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section_sidebar" id="nav-bar">
    <div class="section_logo">
        <img src="<?php $configC->rutaImage('svg/logo.svg') ?>" alt="Logo de empresa">
    </div>
    <div class="section_options">
        <a href="<?php $configC->rutaLink('dashboard') ?>" class="nav_link link_active" id="nav_link">
            <i class="fa-regular fa-house"></i>
            <span>Inicio</span>
        </a>
        <a href="<?php $configC->rutaLink('ventas') ?>" class="nav_link ">
            <i class="fa-regular fa-shop"></i>
            <span>Ventas</span>
        </a>
        <a href="<?php $configC->rutaLink('compras') ?>" class="nav_link ">
            <i class="fa-regular fa-cart-shopping"></i>
            <span>Compras</span>
        </a>
        <a href="<?php $configC->rutaLink('almacen') ?>" class="nav_link ">
            <i class="fa-regular fa-warehouse"></i>
            <span>Almacen</span>
        </a>
        <a href="<?php $configC->rutaLink('pedidos') ?>" class="nav_link ">
            <i class="fa-regular fa-truck-ramp-couch"></i>
            <span>Pedidos</span>
        </a>
        <a href="<?php $configC->rutaLink('comprobantes') ?>" class="nav_link ">
            <i class="fa-regular fa-ballot-check"></i>
            <span>Comprobantes</span>
        </a>
        <a href="<?php $configC->rutaLink('empleados') ?>" class="nav_link ">
            <i class="fa-regular fa-people-group"></i>
            <span>Empleados</span>
        </a>
        <a href="<?php $configC->rutaLink('proveedores') ?>" class="nav_link ">
            <i class="fa-regular fa-people-carry-box"></i>
            <span>Proveedores</span>
        </a>
        <a href="<?php $configC->rutaLink('categorias') ?>" class="nav_link ">
            <i class="fa-regular fa-grid-2"></i>
            <span>Categorías</span>
        </a>
        <a href="<?php $configC->rutaLink('movimientos') ?>" class="nav_link ">
            <i class="fa-regular fa-money-bill-transfer"></i>
            <span>Movimientos</span>
        </a>
        <a href="<?php $configC->rutaLink('empresa') ?>" class="nav_link ">
            <i class="fa-regular fa-buildings"></i>
            <span>Empresa</span>
        </a>
        <a href="<?php $configC->rutaLink('configuracion') ?>" class="nav_link ">
            <i class="fa-regular fa-gear"></i>
            <span>Configuración</span>
        </a>
    </div>
</div>
<div class="body_sidebar">
    Contenido
</div>