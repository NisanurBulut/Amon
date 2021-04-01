@props(['demand' => $demand])
<x-shared.modal />
<x-shared.confirm />


<div class="ui {{ $demand->color }} card">
    <div class="content">
        <div class="left floated">
            <p class="ui label tiny {{ $demand->color }}">{{ $demand->status }} / {{ $demand->state }}</p>
        </div>
        <div class="right floated">
            @if ($demand->OwnedOrIsAdminBy(auth()->user()) == true)
                <a class="btnModalOpen" href="/demands/editDemand/{{ $demand->id }}">
                    <i class="ui icon edit blue"></i>
                </a>
                <a class="btnConfirmModalOpen" href="{{ route('demands.destroyDemand', $demand->id) }}">
                    <i class="ui icon trash red"></i>
                </a>
            @endif
        </div>
    </div>
    <div class="content">
        <img class="right floated mini ui image" src="{{ $demand->ownerImage }}">
        <div class="header">
            {{ $demand->title }} hk.
        </div>
        <div class="meta left floated">
            {{ $demand->ownerName }}
        </div>
        <div class="description" style="overflow: auto;max-height: 15px;min-height:75px;">
            {{ $demand->description }}
        </div>
    </div>
    <div class="extra content">
        <div class="ui two buttons">
          <div class="ui basic red button">Askıya Al</div>
            @if (auth()->user()->is_admin && $demand->undertaking_id<1)
                    <a class="ui basic green button" href="{{ route('demands.undertakeDemand', $demand->id) }}">Üstlen</a>
            @endif
        </div>
    </div>

    <div class="extra content">
        <div class="left floated author">
            {{ $demand->appName }}
        </div>
        @if ($demand->underImage)
        <div class="right floated author">
            <img class="ui avatar image" src="{{ $demand->underImage }}"> {{ $demand->underName}}
        </div>
        @endif
    </div>
</div>
