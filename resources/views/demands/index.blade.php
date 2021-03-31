@extends('layouts.layout')
@section('content')
<x-shared.modal />
    <div class="ui top attached menu">
        <div class="left menu">
          <div class="ui left aligned category search item">
            <div class="ui transparent icon input">
              <input id="inputSearch" class="prompt" type="text" placeholder="Talep ara...">
              <i class="search link icon"></i>
            </div>
            <div class="results"></div>
          </div>
        </div>
        <div class="right menu">
          <a href={{ route('demands.createDemand') }} class="ui item">
            <i class="plus icon large green"></i>
          </a>
        </div>
      </div>
      <div class="ui bottom attached segment" id="divSearchContent">
        <div class="ui grid">
          @for ($i = 0; $i < 20; $i++)
              <div class="four wide column centerGridItems">
                <x-demands.demand-item />
              </div>
          @endfor
      </div>
      </div>
@endsection
