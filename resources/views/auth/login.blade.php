@extends('layouts.layout')
@section('content')

<div class="ui middle large aligned center aligned grid">
  <div class="column">
    <h2 class="ui violet large image header">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    @if(session('status'))
    <div class="bg-red-300 p-4 rounded-lg mb-6 text-white text-center">
    {{ session('status')}}</div>
    @endif
    <form class="ui large form" method="POST" action="{{ route('auth.store') }}">
        @csrf()
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="username" placeholder="Kullanıcı Adı">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Parola">
            </div>
          </div>
          <button type="submit" class="ui fluid large violet submit button">Login</button>
        </div>
      </form>
    </div>
  </div>



@endsection