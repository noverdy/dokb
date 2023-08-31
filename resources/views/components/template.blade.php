<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <style>
        body {
            font-family: 'Libre Baskerville', serif;
        }
    </style>

    <script src="https://cdn.tailwindcss.com/3.3.3"></script>
    <script src="https://kit.fontawesome.com/1f302a994f.js" crossorigin="anonymous"></script>
</head>

<body class="{{ $class }}">
    @if ($navigation)
        <x-navbar />
    @endif
    {{ $slot }}
    @if ($navigation)
        <x-footer />
    @endif

    @stack('scripts')
</body>

</html>
