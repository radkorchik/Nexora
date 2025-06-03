<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'NEXORA - Разработка веб-сайтов' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/page-container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/info-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/features.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/cases.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/consultation-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    {{ $meta ?? '' }}
</head>
<body>
    <div class="page-container">
        <main class="main-content">
            {{ $slot }}
            <img class="background-shape" src="{{ asset('images/background.svg') }}" alt="Фоновая форма" />
        </main>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
