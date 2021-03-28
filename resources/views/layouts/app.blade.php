<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amon</title>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/dataTables.semanticui.min.js') }}" defer></script>
    <script src="{{ asset('js/semantic.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body id="root">
    <div class="ui padded grid">
        <div class="ui purple inverted borderless top fixed fluid menu">
            <a class="header item">AMON</a>
            <div class="right menu">
                <a class="item" {{ route('auth.login') }}>Login</a>
                <a class="item" {{ route('auth.register') }}>Register</a>
            </div>
        </div>
    </div>

   <div class="authContent">
    @yield('content')
   </div>
</body>

</html>
