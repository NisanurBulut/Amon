<form class="ui form" autoComplete="off" method="POST" action="{{ route('settings.updateStatus', $status->id) }}">
{{ csrf_field() }}
    <div class="field">
      <label>Tanım</label>
      <input type="text" name="name" placeholder="Tanım" required value={{ $status->name }} />
    </div>
    <div class="field">
      <x-shared.combobox :items="$items"  :itemSelected="$itemSelected"
      placeholder="Renk" attrId="color_id"/>
    </div>
    <div class="formBtnRightAlligned">
      <button class="ui button purple" type="submit">Kaydet</button>
    </div>
  </form>
