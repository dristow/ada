<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ADA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/publico.css') }}" rel="stylesheet">
    </head>

<body>
    <div class="row">
        <div class="col1">
            <ul>
                <li><a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}"> Home </a></li>
                <li><a class="{{request()->routeIs('associados') ? 'active' : '' }}" href="{{route('associados')}}"> Associados </a></li>
                <li><a class="{{request()->routeIs('maquinas') ? 'active' : '' }}" href="{{route('maquinas')}}"> Máquinas </a></li>
            </ul>
        </div>
        <div>
            @yield('conteudo')
        </div>
    </div>
</body>
</html>
