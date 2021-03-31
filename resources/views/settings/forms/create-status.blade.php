<form class="ui form" autoComplete="off" method="POST" action="{{ route('settings.storeStatus') }}">
@csrf()
    <div class="field">
      <label>Tanım</label>
      <input type="text" name="name" placeholder="Tanım" required>
    </div>
    <div class="field">
      <x-shared.combobox :items="$items" :itemSelected="$itemSelected" placeHolder="Renk"/>
    </div>
    <div class="formBtnRightAlligned">
      <button class="ui button purple" type="submit">Kaydet</button>
    </div>
  </form>
