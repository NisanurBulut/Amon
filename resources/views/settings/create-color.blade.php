

<form class="ui form" method="POST" action="{{ route('settings.storeColor') }}">
    @csrf
    <div class="field">
      <label>Renk Kodu</label>
      <input type="text" name="color" placeholder="name">
    </div>
    <div class="field">
      <label>Açıklama</label>
      <input type="text" name="name" placeholder="Açıklama">
    </div>
    <button class="ui button" type="submit">Kaydet</button>
  </form>
