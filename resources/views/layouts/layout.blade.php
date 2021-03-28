<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/dataTables.semanticui.min.js') }}" defer></script>
    <script src="{{ asset('js/semantic.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
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
      <div class="ui inverted borderless top fixed fluid menu">
        <a class="header item">Project name</a>
        <div class="right menu">
          <div class="item">
            <div class="ui small input"><input placeholder="Search..." /></div>
          </div>
          <a class="item">Dashboard</a> <a class="item">Settings</a>
          <a class="item">Profile</a> <a class="item">Help</a>
        </div>
      </div>
    </div>
    <div class="ui mobile only padded grid">
      <div class="ui top fixed borderless fluid inverted menu">
        <a class="header item">Project Name</a>
        <div class="right menu">
          <div class="item">
            <button class="ui icon toggle basic inverted button">
              <i class="content icon"></i>
            </button>
          </div>
        </div>
        <div class="ui vertical borderless inverted fluid menu">
          <a class="item">Dashboard</a> <a class="item">Settings</a>
          <a class="item">Profile</a> <a class="item">Help</a>
          <div class="ui fitted divider"></div>
          <div class="item">
            <div class="ui small input"><input placeholder="Search..." /></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui padded grid">
      <div
        class="three wide tablet only three wide computer only column"
        id="sidebar"
      >
        <div class="ui vertical borderless fluid text menu">
          <a class="active item">Overview</a> <a class="item">Reports</a>
          <a class="item">Analytics</a> <a class="item">Export</a>
          <div class="ui hidden divider"></div>
          <a class="item">Nav item</a> <a class="item">Nav item again</a>
          <a class="item">One more nav</a> <a class="item">Another nav item</a>
          <a class="item">More navigation</a>
          <div class="ui hidden divider"></div>
          <a class="item">Macintosh</a> <a class="item">Linux</a>
          <a class="item">Windows</a>
        </div>
      </div>
      <div
        class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column"
        id="content"
      >
        <div class="ui padded grid">
            @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>