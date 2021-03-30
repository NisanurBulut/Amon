@extends('layouts.layout')
@section('content')
<x-shared.modal />
@yield('modal')
<div class="ui top attached menu">
  <div class="left menu">
    <div class="ui left aligned category search item">
      <div class="ui transparent icon input">
        <input class="prompt" type="text" placeholder="Uygulama ara...">
        <i class="search link icon"></i>
      </div>
      <div class="results"></div>
    </div>
  </div>
  <div class="right menu">
    <a class="ui item mini btnModalOpen" href="{{ route('apps.createApp') }}">
      <i class="plus icon large green center aligned"></i>
    </a>
  </div>
</div>
<div class="ui bottom attached segment">
  <div class="ui grid">
    @foreach ($apps as $app)
    <div class="four wide column"><img class="ui image" src="https://picsum.photos/200/300" /></div>
    @endforeach
  </div>
</div>

@endsection