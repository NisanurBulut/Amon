

<form class="ui form" method="POST" action="{{ route('settings.updateState', $state->id) }}">
  {{csrf_field()}}
  <div class="field">
    <label>Tanım</label>
    <input type="text" name="name" placeholder="Tanım" required value="{{ $state->name }}" />
  </div>
  <button class="ui button" type="submit">Kaydet</button>
</form>
