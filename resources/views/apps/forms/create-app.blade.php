
  <form class="ui form" autocomplete="off">
    <h4 class="ui dividing header">Uygulama bilgileri</h4>
    <div class="field">
      <label>Uygulama Adı</label>
      <div class="ui fluid field">
        <input type="text" name="name" placeholder="Uygulama Adı" />
      </div>
    </div>
    <div class="field">
      <label>Uygulama tanımı/açıklama</label>
      <div class="ui fluid field">
        <textarea rows="4" type="text" name="description" placeholder="Uygulama Tanımı/Açıklama" />
      </div>
    </div>
    <div class="field">
      <label>Erişim bilgileri</label>
      <div class="two fields">
        <div class="field">
          <input type="text" name="db_name" placeholder="Veritabanı Adı">
        </div>
        <div class="field">
          <input type="text" name="url_address" placeholder="Bağlantı Adresi">
        </div>
      </div>
    </div>
    <div class="formBtnRightAlligned">
      <button class="ui button purple" type="submit">Kaydet</button>
    </div>
  </form>
</div>