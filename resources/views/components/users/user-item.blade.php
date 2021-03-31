@props(['user' => $user])
<x-shared.modal />
<x-shared.confirm />
<div class="ui fluid card">
    <div class="content">
        @if ($user->is_admin)
            <i class="right floated star yellow icon"></i>
        @endif
        <div class="header">{{ $user->name }}</div>
        <div class="description">
            <p></p>
        </div>
    </div>
    <div class="image">
        <img class="ui image" src="{{ $user->image_url }}">
    </div>
    <div class="content">
        <div class="header">{{ $user->username }}</div>
        <div class="ui divider"></div>
        <div class="meta">
            <p class="item">
                <i class="icon grey clock"></i>
                {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="description">
            <p class="item">
                <i class="icon grey envelope"></i>
                {{ $user->email }}</p>
        </div>
    </div>

    <div class="extra content">
        <a onclick="event.preventDefault()" class="left floated edit btnModalOpen" href="/users/editUser/{{ $user->id }}">
            <i class="edit blue icon"></i>
        </a>
        <a class="right floated trash btnConfirmModalOpen"
          id="{{ $user->id }}"  href="{{ route('users.destroyUser', $user->id) }}">
            <i class="trash red icon"></i>
        </a>
    </div>
</div>
