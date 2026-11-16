<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'CodeByACR | Agustín Constantino Rugerio — Desarrollador Full Stack')</title>
    <meta name="description"
        content="@yield('meta_description', 'Portafolio de Agustín Constantino Rugerio: desarrollo Full Stack, Laravel, WordPress y diseño UI/UX.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CodeByACR">
    <meta property="og:title" content="@yield('title', 'CodeByACR | Agustín Constantino Rugerio — Desarrollador Full Stack')">
    <meta property="og:description"
        content="@yield('meta_description', 'Portafolio de Agustín Constantino Rugerio: desarrollo Full Stack, Laravel, WordPress y diseño UI/UX.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

    @include('partials.navbar')

    @yield('content')
    @include('partials.contact-modal')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="{{ asset('asset/js/modules/contact-form.js') }}"></script>

</body>

</html>
