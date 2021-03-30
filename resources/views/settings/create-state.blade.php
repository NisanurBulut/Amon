

<form class="ui form" method="POST" action="{{ route('settings.storeState') }}">
  @csrf()
  <div class="field">
    <label>Tanım</label>
    <input type="text" name="name" placeholder="Tanım" required />
  </div>
  <button class="ui button" type="submit">Kaydet</button>
</form>
