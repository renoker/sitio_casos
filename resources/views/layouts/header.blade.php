<header class="header">
    <div class="header__container">
        <div class="header__left">
            <a href="{{ route('home') }}" class="header__logo-link">
                @if(request()->routeIs('home'))
                    <img src="{{ asset('assets/iconos/Company_Logo.png') }}" alt="Casos Logo" class="header__logo">
                @else
                    <img id="headerLogo" src="{{ asset('assets/logo_azul.png') }}" alt="Casos Logo" class="header__logo"
                        data-src-top="{{ asset('assets/logo_azul.png') }}"
                        data-src-scrolled="{{ asset('assets/iconos/Company_Logo.png') }}">
                @endif
            </a>
        </div>
        <button class="header__menu-toggle" id="menu_hamburguesa" aria-label="Toggle menu">
            <svg class="header__menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12H21M3 6H21M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <!-- Backdrop con blur -->
    <div class="header__menu-backdrop" id="menu_backdrop" aria-hidden="true"></div>
    <!-- Menú deslizante -->
    <div class="header__menu-overlay" id="menu_list">
        <div class="header__menu-content">
            <button class="header__menu-close" aria-label="Close menu">
                <span>&times;</span>
            </button>
            <nav class="header__nav">
                <a href="{{ route('home') }}" class="header__nav-link">Inicio</a>
                <a href="{{ route('nosotros') }}" class="header__nav-link">Nosotros</a>
                <a href="{{ route('metodologia') }}" class="header__nav-link">Metodología</a>
                <a href="{{ route('contacto') }}" class="header__nav-link">Contacto</a>
            </nav>
            <div class="header__contact">
                <a href="tel:5535360404" class="header__contact-link">55 3536 0404</a>
                <a href="mailto:buzondeideas@casos.mx" class="header__contact-link">buzondeideas@casos.mx</a>
                <a href="https://maps.app.goo.gl/u8vKBQAbzVaXtcHD9" target="_blank" rel="noopener noreferrer" class="header__contact-address header__contact-address-link">
                    Blvd. Manuel Ávila Camacho 92A Piso 10-1002,<br>
                    Col. El Conde, Naucalpan, Edo. de Méx.
                </a>
            </div>
            <div class="header__social">
                <a href="https://www.facebook.com/CasosCommunication/?locale=es_LA" target="_blank" rel="noopener noreferrer" class="header__social-link" aria-label="Facebook">
                    @include('components.icons.facebook')
                </a>
                <a href="https://www.linkedin.com/company/casos-communication/" target="_blank" rel="noopener noreferrer" class="header__social-link" aria-label="LinkedIn">
                    @include('components.icons.linkedin')
                </a>
            </div>
        </div>
    </div>
</header>
