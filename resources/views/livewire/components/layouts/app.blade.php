<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
    {{-- <livewire:nav-bar /> --}}
    <div class="container">
        @yield('content')
    </div>
    @livewireScripts
</body>
</html>
