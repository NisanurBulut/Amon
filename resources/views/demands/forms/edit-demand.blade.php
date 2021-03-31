<form class="ui form" method="POST" action="{{ route('demands.updateDemand', $demand->id) }}">
    {{ csrf_field() }}
    <h4 class="ui dividing header">Talep Bilgileri</h4>
    <div class="two fields">
        <div class="field">
            <label>Durum</label>
            <x-shared.combobox :items="$situations" :itemSelected="$demand->status_id"
            placeHolder="Durum" attrId="status_id" />
        </div>
        <div class="field">
            <label>Uygulama</label>
            <x-shared.combobox :items="$apps" :itemSelected="$demand->app_id"
            placeHolder="Uygulama" attrId="app_id"/>
        </div>
    </div>
    <div class="field">
        <label>Başlık/Konu</label>
        <div class="field">
            <input type="text" value="{{ $demand->title }}" name="title" placeholder="Talep hk." required>
        </div>
    </div>
    <div class="field">
        <label>Açıklama</label>
        <div class="fields">
            <input class="inputTextAreaHeight" value={{ $demand->description }} type="text" name="description" placeholder="Açıklama" required>
        </div>
    </div>
    <div class="formBtnRightAlligned">
        <button class="ui button purple" type="submit">Kaydet</button>
    </div>
</form>
</div>
