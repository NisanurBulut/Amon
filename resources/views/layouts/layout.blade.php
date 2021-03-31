<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amon</title>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.min.css') }}">
    <link href="{{ asset('fonts/icons.ttf') }}" rel="stylesheet">

    <link href="/css/main.css" rel="stylesheet">
</head>

<body id="">
    <div class="ui purple inverted borderless top fixed fluid pointing menu">
        <a class="header item" href="{{ route('welcome') }}">AMON</a>
        <div class="right menu">
            @auth()
                <div class="item">
                    <div class="ui small input"><input placeholder="Search..." /></div>
                </div>
                <a class="item" href="{{ route('settings.index') }}">
                    <i class="settings icon large tooltip" data-content="Ayarlar"></i>
                </a>
                <a class="item">
                    <i class="bolt icon large tooltip" data-content="Dashboard"></i>
                </a>
                <a class="item" href="{{ route('demands.index') }}">
                    <i class="tasks icon large tooltip" data-content="Talepler"></i>
                </a>
                <a class="item" href="{{ route('users.index') }}">
                    <i class="users icon large tooltip" data-content="Kullanıcılar"></i>
                </a>
                <a class="item" href="{{ route('apps.index') }}">
                    <i class="rocket icon large tooltip" data-content="Uygulamalar"></i>
                </a>
                <a class="item">
                    <i class="user circle icon large tooltip" data-content="Profil"></i>
                </a>
                <a class="item">
                    <i class="question circle icon large tooltip" data-content="Destek"></i>
                </a>
                <a  class="item" href="{{ route('auth.storeLogout') }}">
                    <i type="submit" class="sign out alternate icon large tooltip" data-content="Oturumu kapat"></i>
                  </a>
            @endauth

        </div>
    </div>
    <div class="" id="content">
        @yield('content')

        <div {{ Session::has('notification') ? 'data-notification' : '' }}
            data-notification-type='{{ Session::get('alert_type', 'info') }}'
            data-notification-message='{{ json_encode(Session::get('message')) }}'>

        </div>
    </div>
    </div>
</body>
{{-- dependencies --}}
<script src="{{ asset('js/jquery.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/semantic.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.datatables.net.min.js') }} " defer></script>
<script src="{{ asset('js/dataTables.semanticui.min.js') }}" defer></script>
{{-- Manuels --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/activate.semanticui-components.js') }}" defer></script>
<script src="{{ asset('js/dataTables.load.js') }}" defer></script>
@yield('scripts')

</html>
