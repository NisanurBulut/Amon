<form class="ui form" method="POST" action="{{ route('demands.storeDemand') }}">
    @csrf()
    <h4 class="ui dividing header">Talep Bilgileri</h4>
    <div class="two fields">
        <div class="field">
            <label>Durum</label>
            <x-shared.combobox :items="$situations" :itemSelected="0"
            placeHolder="Durum" attrId="status_id" />
        </div>
        <div class="field">
            <label>Uygulama</label>
            <x-shared.combobox :items="$apps" :itemSelected="0"
            placeHolder="Uygulama" attrId="app_id"/>
        </div>
    </div>
    <div class="field">
        <label>Başlık/Konu</label>
        <div class="field">
            <input type="text" name="title" placeholder="Talep hk." required>
        </div>
    </div>
    <div class="field">
        <label>Açıklama</label>
        <div class="fields">
            <input class="inputTextAreaHeight" type="text" name="description" placeholder="Açıklama" required>
        </div>
    </div>
    <div class="formBtnRightAlligned">
        <button class="ui button purple" type="submit">Kaydet</button>
    </div>
</form>
</div>
