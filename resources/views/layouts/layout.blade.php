<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amon</title>

    <!-- Fonts -->
    <link href="{{ asset('fonts/icons.ttf') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui purple inverted borderless top fixed fluid menu">
        <a class="header item" href="{{ route('welcome') }}">AMON</a>
        <div class="right menu">
          <div class="item">
            <div class="ui small input"><input placeholder="Search..." /></div>
          </div>
          <a class="item" href="{{ route('auth.login') }}">Login</a>
          <a class="item" href="{{ route('auth.register') }}">Register</a>
          <a class="item">Dashboard</a> <a class="item">Settings</a>
          <a class="item">Profile</a> <a class="item">Help</a>
        </div>
      </div>
    </div>
    <div class="ui padded grid">


      @yield('content')
      </div>
    </div>
  </body>


  {{-- <link rel="stylesheet" type="text/css" href=~/node_modules/semantic/dist/semantic.min.css"> --}}
  {{-- <script src="~/node_modules/semantic/dist/semantic.min.js" defer></script> --}}
 <script src="{{ asset('js/jquery.js') }}" defer></script>
 <script src="{{ asset('js/main.js') }}" defer></script>
 <script src="{{ asset('js/semantic.min.js') }}" defer></script>
 <script  src="{{ asset('js/jquery.datatables.net.min.js') }} " defer></script>
 <script src="{{ asset('js/dataTables.semanticui.min.js') }}" defer></script>
 <script src="{{ asset('js/app.js') }}" defer></script>

  </html>