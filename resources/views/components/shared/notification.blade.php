@if (Session::has('notification'))
<div class="message"
id="messageBox" style="margin-bottom:1rem;float:right; max-width:50%;">
    <div class="ui {{ session('type') }} icon message">
        <i class="{{ session('icon') }} icon"></i>
        <i class="close icon"></i>
        <div class="content">
          <div class="header">
            {{ session('header') }}
          </div>
          <p>{{ session('notification') }}</p>
        </div>
      </div>
</div>
@endif