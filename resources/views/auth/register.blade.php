@extends('layouts.app')
@section('content')

<div class="ui middle large aligned center aligned grid">
    <div class="column">
      <h2 class="ui teal large image header">
          <div class="content">
          Register to your account
        </div>
      </h2>
      <form class="ui large form">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="username" placeholder="User Name">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail address">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <div class="ui fluid large teal submit button">Register</div>
        </div>

        <div class="ui error message"></div>

      </form>

      <div class="ui message">
        <a href="{{ route('auth.login') }}">Login</a>
      </div>
    </div>
  </div>



@endsection