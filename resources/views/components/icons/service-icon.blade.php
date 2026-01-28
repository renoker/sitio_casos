@props(['icon', 'class' => ''])

<img src="{{ asset('assets/iconos/Servicios/' . $icon . '.svg') }}" alt="{{ $icon }}" class="service-icon {{ $class }}">
