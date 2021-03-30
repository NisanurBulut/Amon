

<form autoComplete="off" class="ui form" method="POST" action="{{ route('settings.storeColor') }}">
    @csrf
    <div class="field">
      <label>Renk Kodu</label>
      <input type="text" name="name" placeholder="Name" required>
    </div>
    <div class="field">
      <label>Açıklama</label>
      <input type="text" name="description" placeholder="Açıklama" required>
    </div>
    <div class="formBtnRightAlligned">
      <button class="ui button purple" type="submit">Kaydet</button>
    </div>
  </form>
