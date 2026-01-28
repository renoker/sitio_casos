<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('web.png') }}" />
    <meta name="theme-color" content="#1EA24D">
    @yield('head')
    @vite('resources/css/app.css')
    @vite('resources/sass/main.scss')
    @yield('meta')
</head>

<body class="@if (request()->routeIs('home')) page-home @endif">

    @yield('popups')

    @if ($errors->any())
        <script>
            alert("{{ $errors->first() }}");
        </script>
    @endif

    @if (\Session::has('message'))
        <script>
            alert("{!! \Session::get('message') !!}");
        </script>
    @endif


    <main class="main @yield('back')">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </main>

    @yield('scripts')
    <script>
        // Scroll to top (solo si existe el elemento)
        const topCero = document.getElementById('topCero');
        if (topCero) {
            topCero.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Menú hamburguesa
        const menu_hamburguesa = document.getElementById('menu_hamburguesa');
        const box_menu = document.getElementById('menu_list');
        const menu_close = box_menu?.querySelector('.header__menu-close');
        const menu_content = box_menu?.querySelector('.header__menu-content');

        if (menu_hamburguesa && box_menu) {
            // Abrir menú
            menu_hamburguesa.addEventListener('click', function(e) {
                e.stopPropagation();
                box_menu.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevenir scroll del body
            });

            // Cerrar menú con botón de cerrar
            if (menu_close) {
                menu_close.addEventListener('click', function(e) {
                    e.stopPropagation();
                    box_menu.classList.remove('active');
                    document.body.style.overflow = ''; // Restaurar scroll
                });
            }

            // Cerrar menú al hacer clic fuera del contenido (en el overlay)
            box_menu.addEventListener('click', function(e) {
                if (e.target === box_menu) {
                    box_menu.classList.remove('active');
                    document.body.style.overflow = ''; // Restaurar scroll
                }
            });

            // Cerrar menú con tecla ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && box_menu.classList.contains('active')) {
                    box_menu.classList.remove('active');
                    document.body.style.overflow = ''; // Restaurar scroll
                }
            });
        }
    </script>
</body>

</html>
