@extends('layouts.main')
@section('title', 'Metodología')
@section('content')
    <!-- Hero Section -->
    <section class="metodologia-hero">
        <div class="metodologia-hero__container">
            <h1 class="metodologia-hero__title">
                <span class="metodologia-hero__title-line">Trabajamos</span>
                <span class="metodologia-hero__title-line">contigo como</span>
                <span class="metodologia-hero__title-line">socio estratégico</span>
            </h1>
            <p class="metodologia-hero__description">
                A través de un proceso probado donde integramos estrategia, ejecución y resultados. Más que una agencia
                somos tu aliado y te acompañamos a alcanzar tus objetivos.
            </p>
        </div>
    </section>

    <!-- Sección: Nuestra Metodología -->
    <section class="metodologia-steps">
        <div class="metodologia-steps__container">
            <h2 class="metodologia-steps__title">Nuestra Metodología</h2>
            <p class="metodologia-steps__subtitle">Garantiza resultados medibles y crecimiento sostenible</p>

            <div class="metodologia-steps__timeline">
                <div class="metodologia-steps__line"></div>

                <!-- Card 01 -->
                <div class="metodologia-step metodologia-step--right" data-step="1">
                    <div class="metodologia-step__number">01</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Análisis general</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Involucramiento
                                con el negocio y la marca</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Entendemos tu cultura, esencia, entorno y objetivos puntuales.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Análisis de cultura empresarial</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Análisis de competencia y mercado</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Research de audiencia y insights</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Benchmarking y mejores prácticas</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="metodologia-step metodologia-step--left" data-step="2">
                    <div class="metodologia-step__number">02</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Diagnóstico estratégico</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Análisis de
                                necesidad del cliente</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Detectamos retos, oportunidades y puntos clave para construir soluciones a medida.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Definición de puntos de mejora</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Identificación de desafíos actuales</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Mapeo de oportunidades de mercado</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Análisis de brechas competitivas</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="metodologia-step metodologia-step--right" data-step="3">
                    <div class="metodologia-step__number">03</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Planificación integral</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Desarrollo de
                                estrategias y recomendaciones</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Diseñamos un plan integral de marketing 360° basado en los datos analizados.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Estrategia de comunicación integrada</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Planning de medios y mix de medios</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Propuesta de valor diferenciada</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Roadmap de implementación</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 04 -->
                <div class="metodologia-step metodologia-step--left" data-step="4">
                    <div class="metodologia-step__number">04</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Red de especialistas</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Colaboramos con
                                los mejores</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Contamos con una red de especialistas para sumar valor en cada etapa y para cada necesidad.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Selección y coordinación de equipos</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Gestión de proyectos</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Supervisión de calidad externa</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 05 -->
                <div class="metodologia-step metodologia-step--right" data-step="5">
                    <div class="metodologia-step__number">05</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Implementación experta</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Ejecución y
                                coordinación de proyecto</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Convertimos la estrategia en acciones, coordinando recursos y garantizando calidad.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Implementación de campañas</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Asegurar cumplimiento de objetivos</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Control de calidad y timings</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Seguimiento de entregables</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 06 -->
                <div class="metodologia-step metodologia-step--left" data-step="6">
                    <div class="metodologia-step__number">06</div>
                    <div class="metodologia-step__content">
                        <h3 class="metodologia-step__title">
                            <span class="metodologia-step__title-line">Optimización continua</span>
                            <span class="metodologia-step__title-line metodologia-step__title-line--bold">Medición de
                                resultados</span>
                        </h3>
                        <p class="metodologia-step__description">
                            Medimos el impacto con indicadores claros, ajustamos y optimizamos para maximizar el
                            crecimiento.
                        </p>
                        <ul class="metodologia-step__list">
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Medición de KPIs y métricas clave</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Análisis de performance y ROI</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Ajustes y optimizaciones</span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/iconos/check_circle.svg') }}" alt="Check"
                                    class="metodologia-step__icon">
                                <span>Reportes y recomendaciones</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        // Animación de aparición al hacer scroll
        document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.metodologia-step');

            // Intersection Observer para detectar cuando las tarjetas entran en el viewport
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('metodologia-step--visible');
                        // Opcional: dejar de observar una vez que se ha mostrado
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observar cada tarjeta
            steps.forEach(function(step) {
                observer.observe(step);
            });
        });
    </script>
@endsection
