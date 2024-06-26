<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BookSystem') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    </head>
    <body>
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="container">
            <!-- Page Heading -->
            @if (isset($header))
            {{ $header }}
            @endif
            
            {{ $slot }}
        </main>
    </body>
</html>
