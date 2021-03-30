<form class="ui form" autocomplete="off" method="POST" action="{{ route('apps.storeApp') }}">
  @csrf()
    <h4 class="ui dividing header">Uygulama bilgileri</h4>
    <div class="field">
        <label>Uygulama Adı</label>
        <div class="ui fluid field">
            <input type="text" name="name" placeholder="Uygulama Adı" required />
        </div>
    </div>
    <div class="field">
        <label>Uygulama tanımı/açıklama</label>
        <div class="ui fluid field">
            <textarea rows="4" type="text" name="description" placeholder="Uygulama Tanımı/Açıklama" required />
        </div>
    </div>
    <div class="field">
        <label>Erişim bilgileri</label>
        <div class="two fields">
            <div class="field">
                <input type="text" name="db_name" placeholder="Veritabanı Adı" required />
            </div>
            <div class="field">
                <input type="text" name="url_address" placeholder="Bağlantı Adresi" required />
            </div>
        </div>
    </div>
    <div class="field">

        <label>Uygulama ikon bilgisi</label>
        <div class="two fields">
            <div class="twelve wide field">
                <input id="url_icon" type="text" name="url_icon" placeholder="Uygulama ikon adresi" required
                    onchange="$('#icon_img').attr('src',this.value)" />
            </div>
            <div class="four wide field">
                <img id="icon_img" class="ui middle aligned tiny image"
                src="http://placehold.jp/200x150.png" />
            </div>
        </div>
    </div>
    <div class="formBtnRightAlligned">
        <button class="ui button purple" type="submit">Kaydet</button>
    </div>
</form>
</div>
