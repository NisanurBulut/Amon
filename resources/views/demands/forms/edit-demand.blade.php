<form class="ui form">
    <h4 class="ui dividing header">Talep Bilgileri</h4>
    <div class="two fields">
        <div class="field">
            <label>Durum</label>
            <select class="ui fluid dropdown">
                <option value="">Acil</option>
                <option value="WY">Çok Acil</option>
            </select>
        </div>
        <div class="field">
            <label>Uygulama</label>
            <select class="ui fluid dropdown">
                <option value="">AMON</option>
                <option value="">IKARUS</option>
            </select>
        </div>
    </div>
    <div class="field">
        <label>Başlık/Konu</label>
        <div class="field">
            <input type="text" name="name" placeholder="Talep hk." required>
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
