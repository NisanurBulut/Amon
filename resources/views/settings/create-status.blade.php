

<form class="ui form" method="POST" action="{{ route('settings.storeStatus') }}">
@csrf()
    <div class="field">
      <label>Tanım</label>
      <input type="text" name="name" placeholder="Tanım" required>
    </div>
    <div class="field">
      <x-shared.combobox :colorSelects="$colorSelects"/>
    </div>
    <button class="ui button right floated green" type="submit">Kaydet</button>
  </form>
