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
          <a class="ui item btnModalOpen" href={{ route('demands.createDemand') }}>
            <i class="plus icon large green"></i>
          </a>
        </div>
      </div>
      <div class="ui bottom attached segment" id="divSearchContent">
        <div class="ui grid">
          @foreach ($demands as $demand)
          <div class="four wide column centerGridItems">
            <x-demands.demand-item :demand="$demand"/>
          </div>
          @endforeach
      </div>
      </div>
@endsection
