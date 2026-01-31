<footer class="footer">
    <div class="footer__container">
        <!-- Botón scroll to top -->
        <button class="footer__scroll-top" id="scrollToTop" aria-label="Ir arriba">
            <img src="{{ asset('assets/iconos/Footer/arrow_upward.svg') }}" alt="Ir arriba">
        </button>

        <!-- Contenido principal del footer -->
        <div class="footer__main">
            <!-- Columna izquierda: Información de la compañía -->
            <div class="footer__company">
                <div class="footer__logo">
                    <img src="{{ asset('assets/iconos/Footer/footer_logo.svg') }}" alt="Casos Communication">
                </div>

                <div class="footer__info">
                    <div class="footer__info-section">
                        <h3 class="footer__info-title">Ubicación</h3>
                        <a href="https://maps.app.goo.gl/u8vKBQAbzVaXtcHD9" target="_blank" rel="noopener noreferrer" class="footer__info-link footer__info-address">
                            Blvd. Manuel Ávila Camacho 92A Piso 10-1002,<br>
                            Col. El Conde, Naucalpan, Edo. de Méx.
                        </a>
                    </div>

                    <div class="footer__info-section">
                        <h3 class="footer__info-title">Contacto</h3>
                        <a href="mailto:buzondeideas@casos.mx" class="footer__info-link">
                            buzondeideas@casos.mx
                        </a>
                    </div>

                    <div class="footer__info-section">
                        <h3 class="footer__info-title">Teléfono</h3>
                        <a href="tel:+525535360404" class="footer__info-link">
                            +52 55 3536 0404
                        </a>
                    </div>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/CasosCommunication/?locale=es_LA" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="Facebook">
                            <img src="{{ asset('assets/iconos/Footer/Facebook.svg') }}" alt="Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/casos-communication/" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="LinkedIn">
                            <img src="{{ asset('assets/iconos/Footer/LinkedIn.svg') }}" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Columnas derechas: Navegación -->
            <div class="footer__navigation">
                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">Menú</h3>
                    <ul class="footer__nav-list">
                        <li><a href="{{ route('home') }}" class="footer__nav-link">Inicio</a></li>
                        <li><a href="{{ route('metodologia') }}" class="footer__nav-link">Metodología</a></li>
                        <li><a href="{{ route('nosotros') }}" class="footer__nav-link">Nosotros</a></li>
                        <li><a href="{{ route('contacto') }}" class="footer__nav-link">Contacto</a></li>
                    </ul>
                </div>

                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">Servicios</h3>
                    <ul class="footer__nav-list">
                        <li><span class="footer__nav-text">Estrategia y consultoría</span></li>
                        <li><span class="footer__nav-text">Comunicación y PR</span></li>
                        <li><span class="footer__nav-text">Eventos y activaciones</span></li>
                        <li><span class="footer__nav-text">Planeación de medios</span></li>
                        <li><span class="footer__nav-text">Marketing Digital</span></li>
                        <li><span class="footer__nav-text">Influencer Marketing</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sección inferior: Copyright y términos -->
        <div class="footer__bottom">
            <p class="footer__copyright">
                © 2025 Casos Communication. Todos los derechos reservados.
            </p>
            <a href="{{ route('terminos') }}" class="footer__terms">Términos y condiciones</a>
        </div>
    </div>
</footer>

<script>
    // Scroll to top functionality
    document.addEventListener('DOMContentLoaded', function() {
        const scrollToTopBtn = document.getElementById('scrollToTop');

        if (scrollToTopBtn) {
            // Scroll suave al hacer clic (botón siempre visible)
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
