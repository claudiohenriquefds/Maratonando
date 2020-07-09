<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maratonando</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
    <body>
        @yield('content')
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scriptAddInputs.js') }}"></script>
    @include('sweetalert::alert')

</html>