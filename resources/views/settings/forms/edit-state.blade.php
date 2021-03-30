<form class="ui form" autoComplete="off" method="POST" action="{{ route('settings.updateState', $state->id) }}">
  {{csrf_field()}}
  <div class="field">
    <label>Tanım</label>
    <input type="text" name="name" placeholder="Tanım" required value="{{ $state->name }}" />
  </div>
  <div class="formBtnRightAlligned">
    <button class="ui button purple" type="submit">Kaydet</button>
  </div>
</form>
