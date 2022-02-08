<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title != null ? env("APP_NAME"). " | " . $title : env("APP_NAME") }}</title>
</head>

<body class="font-poppins" id="body">

    <main id="main">
        <x-navbar />

        <x-navbar-sm />

        <x-sidebar />

        {{ $slot }}
    </main>

    <x-footer />

    <script src="{{ asset('js/font-awesome/all.js') }}"></script>
    <script src="{{ asset('js/landing-page/script.js') }}"></script>
</body>

</html>
