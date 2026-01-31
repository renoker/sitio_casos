@extends('layouts.main')
@section('title', 'Contacto')
@section('content')
    <!-- Hero Section -->
    <section class="contacto-hero">
        <div class="contacto-hero__container">
            <h1 class="contacto-hero__title">Hablemos de ti</h1>
            <p class="contacto-hero__description">
                Estamos listos para ser tu socio estratégico. Cuéntanos tu desafío y avancemos juntos con la estrategia
                perfecta para tu marca.
            </p>
        </div>
    </section>

    <!-- Sección: Formulario de contacto -->
    <section class="contacto-form">
        <div class="contacto-form__container">
            <div class="contacto-form__left">
                <h2 class="contacto-form__title">Cuéntanos tus ideas</h2>
                <p class="contacto-form__intro">
                    Cuéntanos tus ideas y tu situación actual, para hacerte un planteamiento.
                </p>
                <div class="contacto-form__info">
                    <div class="contacto-form__info-item">
                        <div class="contacto-form__icon">
                            <img src="{{ asset('assets/iconos/mail.svg') }}" alt="Email">
                        </div>
                        <a href="mailto:buzondeideas@casos.mx" class="contacto-form__link">
                            buzondeideas@casos.mx
                        </a>
                    </div>
                    <div class="contacto-form__info-item">
                        <div class="contacto-form__icon">
                            <img src="{{ asset('assets/iconos/call.svg') }}" alt="Teléfono">
                        </div>
                        <a href="tel:+525535360404" class="contacto-form__link">
                            +52 55 3536 0404
                        </a>
                    </div>
                    <div class="contacto-form__info-item">
                        <div class="contacto-form__icon">
                            <img src="{{ asset('assets/iconos/location_on.svg') }}" alt="Ubicación">
                        </div>
                        <a href="https://maps.app.goo.gl/u8vKBQAbzVaXtcHD9" target="_blank" rel="noopener noreferrer" class="contacto-form__text contacto-form__link">
                            Blvd. Manuel Ávila Camacho 92A Piso 10-1002, Col. El Conde, Naucalpan, Edo. de Méx.
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacto-form__right">
                <form class="contacto-form__form" method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="contacto-form__field">
                        <label for="nombre" class="contacto-form__label">Nombre completo *</label>
                        <input type="text" id="nombre" name="nombre" class="contacto-form__input" required>
                    </div>
                    <div class="contacto-form__field">
                        <label for="email" class="contacto-form__label">Email corporativo *</label>
                        <input type="email" id="email" name="email" class="contacto-form__input" required>
                    </div>
                    <div class="contacto-form__field">
                        <label for="proyecto" class="contacto-form__label">Cuéntanos sobre tu proyecto *</label>
                        <textarea id="proyecto" name="proyecto" class="contacto-form__textarea" rows="5"
                            placeholder="Escribe aquí tu mensaje" required></textarea>
                    </div>
                    <div class="contacto-form__field">
                        <label for="archivo" class="contacto-form__label">Adjuntar archivo o imagen</label>
                        <input type="file" id="archivo" name="archivo" class="contacto-form__file"
                            accept="image/*,.pdf,.doc,.docx" data-max-size="1048576">
                        <small class="contacto-form__file-hint">Seleccionar un archivo de max 1 Mb</small>
                    </div>
                    <button type="submit" class="contacto-form__submit">Enviar</button>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        // Validación de tamaño de archivo
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('.contacto-form__file');
            if (fileInput) {
                fileInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file && file.size > 1048576) { // 1 MB en bytes
                        alert(
                            'El archivo es demasiado grande. Por favor selecciona un archivo de máximo 1 MB.');
                        e.target.value = '';
                    }
                });
            }
        });
    </script>
@endsection
