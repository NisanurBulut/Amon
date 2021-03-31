@extends('layouts.layout')
@section('content')
    <x-shared.modal />
    @yield('modal')
    <div class="ui top attached menu">
        <div class="left menu">
            <div class="ui left aligned category search item">
                <div class="ui transparent icon input">
                    <input id="inputSearch" class="prompt" type="text" placeholder="Kullanıcı ara...">
                    <i class="search link icon"></i>
                </div>
                <div class="results">
                </div>
            </div>
        </div>
        <div class="right menu">
            @if (auth()->user()->is_admin)
            <a class="ui item mini btnModalOpen" href="{{ route('users.createUser') }}">
                <i class="plus icon large green center aligned"></i>
            </a>
            @endif
        </div>
    </div>
    <div class="ui bottom attached segment" id="divSearchContent">
        <div class="ui grid">
            @foreach ($users as $user)
                <div class="four wide column centerGridItems">
                    <x-users.user-item :user="$user" />
                </div>
            @endforeach
        </div>
    </div>

@endsection
