@extends('layouts.main')
@section('title', 'Nosotros')
@section('content')
    <!-- Hero Section -->
    <section class="nosotros-hero">
        <div class="nosotros-hero__container">
            <h1 class="nosotros-hero__title">
                <span class="nosotros-hero__title-line">Somos tu aliado estratégico</span>
            </h1>
            <p class="nosotros-hero__description">
                Desde 2006, transformamos la manera en que las empresas se conectan con sus audiencias. No somos una agencia
                tradicional: somos el socio estratégico que necesitas para cubrir las necesidades de tu marca.
            </p>
        </div>
    </section>

    <!-- Sección: Dos décadas trabajando con marcas -->
    <section class="nosotros-principles">
        <div class="nosotros-principles__container">
            <div class="nosotros-principles__content">
                <div class="nosotros-principles__left">
                    <h2 class="nosotros-principles__title">
                        Dos décadas<br>
                        trabajando con<br>
                        marcas que<br>
                        perduran
                    </h2>
                </div>
                <div class="nosotros-principles__right">
                    <p class="nosotros-principles__intro">
                        Nuestros principios guían cada estrategia y crean relaciones sólidas. A través de los años nos dan
                        la confianza de llegar a donde hoy estamos.
                    </p>
                    <ul class="nosotros-principles__list">
                        <li class="nosotros-principles__item">
                            <div class="nosotros-principles__icon">
                                <img src="{{ asset('assets/iconos/analytics.svg') }}" alt="Analytics">
                            </div>
                            <span class="nosotros-principles__text">Pasión por los Resultados</span>
                        </li>
                        <li class="nosotros-principles__item">
                            <div class="nosotros-principles__icon">
                                <img src="{{ asset('assets/iconos/emoji_objects.svg') }}" alt="Innovación">
                            </div>
                            <span class="nosotros-principles__text">Innovación Estratégica</span>
                        </li>
                        <li class="nosotros-principles__item">
                            <div class="nosotros-principles__icon">
                                <img src="{{ asset('assets/iconos/search_insights.svg') }}" alt="Transparencia">
                            </div>
                            <span class="nosotros-principles__text">Transparencia Total</span>
                        </li>
                        <li class="nosotros-principles__item">
                            <div class="nosotros-principles__icon">
                                <img src="{{ asset('assets/iconos/handshake.svg') }}" alt="Socio">
                            </div>
                            <span class="nosotros-principles__text">Mentalidad de Socio</span>
                        </li>
                    </ul>
                    <a href="#contacto" class="nosotros-principles__button">Trabajemos juntos</a>
                </div>
            </div>
            <div class="nosotros-principles__image">
                <img src="{{ asset('assets/img3-equipo-casos-communication.png') }}" alt="Equipo Casos Communication">
            </div>
        </div>
    </section>

    <!-- Sección: ¿Construimos Brand Love juntos? -->
    <section class="nosotros-cta">
        <div class="nosotros-cta__container">
            <div class="nosotros-cta__image">
                <img src="{{ asset('assets/img4-equipo-sentados-piso.png') }}" alt="Equipo trabajando">
            </div>
            <div class="nosotros-cta__content">
                <h2 class="nosotros-cta__title">¿Construimos Brand Love juntos?</h2>
                <p class="nosotros-cta__description">
                    Conversemos sobre cómo podemos ser el socio estratégico que tu marca necesita.
                </p>
                <a href="#contacto" class="nosotros-cta__button">Comencemos tu próximo proyecto</a>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
