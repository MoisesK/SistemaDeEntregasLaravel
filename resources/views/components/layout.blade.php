<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-dark text-light">
    <div class="container">
        <x-header />

        <h1 class="text-center text-uppercase"><i class="{{$icone}}"></i>{{ $title }}</h1>

        @if ($errors->any())
        <div class="alert alert-danger text-center">
            <strong>ERROR! <i class="bi bi-emoji-angry"></i>  </strong>

            <ul>
                @foreach ($errors->all() as $error)
                {{ $error }} <br>
                @endforeach
            </ul>
        </div>
        @endif

        {{$slot}}

</body>

<x-footer />

</html>