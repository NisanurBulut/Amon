

<form autoComplete="off" class="ui form" method="POST" action="{{ route('settings.storeState') }}">
  @csrf()
  <div class="field">
    <label>Tanım</label>
    <input type="text" name="name" placeholder="Tanım" required />
  </div>
  <div class="formBtnRightAlligned">
    <button class="ui button purple" type="submit">Kaydet</button>
  </div>
</form>
