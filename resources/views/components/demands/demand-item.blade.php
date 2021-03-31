@props(['demand' => $demand])
<x-shared.modal />
<x-shared.confirm />
<div class="ui {{ $demand->color }} card">
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
  </div>