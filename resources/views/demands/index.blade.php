@extends('layouts.layout')
@section('content')
<x-shared.modal />
    <div class="ui top attached menu">
        <div class="left menu">
          <div class="ui left aligned category search item">
            <div class="ui transparent icon input">
              <input class="prompt" type="text" placeholder="Talep ara...">
              <i class="search link icon"></i>
            </div>
            <div class="results"></div>
          </div>
        </div>
        <div class="right menu">
          <a href={{ route('demands.create') }} class="ui item">
            <i class="plus icon large green"></i>
          </a>
        </div>
      </div>
      <div class="ui bottom attached segment">
        <div class="ui cards">
            @for ($i = 0; $i < 20; $i++)
            <x-demand-item />
        @endfor
        </div>
      </div>
@endsection
