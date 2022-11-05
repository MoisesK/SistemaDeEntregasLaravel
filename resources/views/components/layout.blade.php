<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-dark text-light">
    <div class="container">
        <div class="jumbotron bg-warning p-3 my-3">

            <h1 class="text-center">ENTREGAS 2000 - v.2</h1>
            <p class="text-center fs-5 fst-italic">O SEU SISTEMA DE ENTREGAS RÁPIDAS - FRAMEWORK VERSION</p>
            <ul class=" nav nav-pills nav-justified navbar-dark bg-dark">
                <li class="nav-item"><a href="" class="nav-link fs-5 fst-italic">HOME</a></li>
                <li class="nav-item"><a href="#" class="nav-link fs-5 fst-italic">NOVA ENTREGA</a></li>
                <li class="nav-item"><a href="#" class="nav-link fs-5 fst-italic ">SOBRE</a></li>
            </ul>

        </div>

        <h1>{{ $title }}</h1>
        {{$slot}}

</body>

<footer class="text-center mb-3">
    <hr>
    <a href="https://github.com/MoisesK/" class=""><i class="bi bi-github"></i></a>
    Moisés Dev - 2022
</footer>

</html>