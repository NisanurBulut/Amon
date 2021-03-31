@props(['demand' => $demand])
<x-shared.modal />
<x-shared.confirm />
<div class="ui {{ $demand->color }} card">
  <div class="content">
    <div class="left floated">
      <p class="ui label tiny {{ $demand->color }}">{{ $demand->status }} / {{ $demand->state }}</p>
    </div>
    <div class="right floated">
      {{-- <p class="ui label tiny grey"></p> --}}
      <i class="ui icon edit blue"></i>
      <i class="ui icon trash red"></i>
    </div>
  </div>
    <div class="content">
      <img class="right floated mini ui image" src="{{ $demand->ownerImage }}">
      <div class="header">
        {{ $demand->title }} hk.
      </div>
      <div class="meta">
        {{ $demand->ownerName }}
      </div>
      <div class="description" style="overflow: auto;max-height: 100px;min-height:100px;">
        {{ $demand->description }}
      </div>
    </div>
    <div class="extra content">
      <div class="ui two buttons">
        <div class="ui basic green button">Approve</div>
        <div class="ui basic red button">Decline</div>
      </div>
    </div>

  <div class="extra content">
    <div class="left floated author">

      <div class="meta">10 hour ago</div>
    </div>
    <div class="right floated author">
      <img class="ui avatar image" src="https://avatars.githubusercontent.com/u/37306467?v=4"> Matt
    </div>
  </div>
  </div>