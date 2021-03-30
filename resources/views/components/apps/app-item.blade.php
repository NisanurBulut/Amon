@props(['app' => $app])
<x-shared.modal />
<x-shared.confirm />
<div class="ui fluid card">
    <div class="content">
       <div class="hoverBtns">
        <a class="btnModalOpen" href="/apps/editApp/{{ $app->id }}">
          <i class="right floated edit blue icon large"></i>
          </a>
        <a class="btnConfirmModalOpen" href="{{ route('apps.destroyApp',$app->id) }}">
          <i class="right floated trash red icon large"></i>
        </a>
       </div>
        <div class="header">
            <div class="left floated author">
                <img class="ui avatar image" src="{{ $app->url_icon }}"> {{ $app->name }}
            </div>
        </div>
    </div>
<div class="content" style="overflow: auto;max-height: 100px;min-height:100px;">
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
