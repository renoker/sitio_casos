<header class="header">
    <div class="header__container">
        <div class="header__left">
            <img src="{{ asset('assets/iconos/Company_Logo.png') }}" alt="Casos Logo" class="header__logo">
        </div>
        <button class="header__menu-toggle" id="menu_hamburguesa" aria-label="Toggle menu">
            <img src="{{ asset('assets/iconos/menu.png') }}" alt="Menu" class="header__menu-icon">
        </button>
    </div>

    <!-- Menú deslizante -->
    <div class="header__menu-overlay" id="menu_list">
        <div class="header__menu-content">
            <button class="header__menu-close" aria-label="Close menu">
                <span>&times;</span>
            </button>
            <nav class="header__nav">
                <a href="#" class="header__nav-link">Inicio</a>
                <a href="#" class="header__nav-link">Nosotros</a>
                <a href="#" class="header__nav-link">Metodología</a>
                <a href="#" class="header__nav-link">Contacto</a>
            </nav>
            <div class="header__contact">
                <a href="tel:5535360404" class="header__contact-link">55 3536 0404</a>
                <a href="mailto:buzondeideas@casos.mx" class="header__contact-link">buzondeideas@casos.mx</a>
                <p class="header__contact-address">
                    Blvd. Manuel Ávila Camacho 92A Piso 10-1002,<br>
                    Col. El Conde, Naucalpan, Edo. de Méx.
                </p>
            </div>
            <div class="header__social">
                <a href="#" class="header__social-link" aria-label="Facebook">
                    @include('components.icons.facebook')
                </a>
                <a href="#" class="header__social-link" aria-label="Instagram">
                    @include('components.icons.instagram')
                </a>
                <a href="#" class="header__social-link" aria-label="LinkedIn">
                    @include('components.icons.linkedin')
                </a>
            </div>
        </div>
    </div>
</header>
