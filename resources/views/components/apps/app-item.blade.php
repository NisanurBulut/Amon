@props(['app' => $app])
<x-shared.modal />
<x-shared.confirm />
<div class="ui fluid card">
    <div class="content" style="cursor:pointer">
        <i class="right floated green eye icon large"></i>
        <i class="right floated edit blue icon large"></i>
        <i class="right floated trash red icon large"></i>
        <div class="header">
            <div class="left floated author">
                <img class="ui avatar image" src="{{ $app->url_icon }}"> {{ $app->name }}
            </div>
        </div>
    </div>
<div class="content">
  <div class="description">
    <p>{{ $app->description }}</p>
  </div>
</div>
<div class="content">
  <div class="ui middle aligned divided list">
    <div class="item">
      <i class="database icon grey large"></i>
      <div class="content">
        <a class="header">{{ $app->db_name }}</a>
      </div>
    </div>
    <div class="item">
      <i class="linkify icon large grey"></i>
      <div class="content">
        <a class="header">{{ $app->url_address }}</a>
      </div>
    </div>
  </div>
</div>
    <div class="content">
        <div class="meta right floated">{{ $app->created_at->diffForHumans() }}</div>
    </div>
</div>
