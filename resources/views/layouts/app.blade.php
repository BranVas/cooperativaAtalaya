<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']) <!-- estilos/js -->
    @livewireStyles <!-- Livewire CSS -->
</head>
<body>
    {{ $slot }} <!-- Aquí se renderizan las vistas -->
    
    @livewireScripts <!-- Livewire JS -->
</body>
</html>