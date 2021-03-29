

<form class="ui form">
    <div class="field">
      <label>Tanım</label>
      <input type="text" name="name" placeholder="Tanım">
    </div>
    <div class="field">
      <x-shared.combobox :colorSelects="$colorSelects"/>
    </div>

    <button class="ui button" type="submit">Submit</button>
  </form>
