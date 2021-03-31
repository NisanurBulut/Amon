<form autoComplete="off" class="ui form" method="POST" action="{{ route('users.storeUser') }}">
    @csrf
    <h4 class="ui dividing header">Kullanıcı Bilgileri</h4>
    <div class="two fields">

        <div class="field">
            <label>Ad Soyad</label>
            <div class="ui right labeled input">
                <input id="name" type="text" name="name" placeholder="Uygulama ikon adresi"
                 required
                onkeyup="event.preventDefault();countInput(this,'lblUser_name')" maxlength="300"/>
                <div class="ui basic label label" id="lblUser_name">0</div>
            </div>
        </div>
        <div class="field">
            <label>Kullanıcı Adı</label>
            <div class="ui right labeled input">
                <input name="username" required placeholder="Kullanıcı Adı"
                onkeyup="event.preventDefault();countInput(this,'lblUsername')"/>
                <div class="ui basic label label" id="lblUsername">0</div>
            </div>
        </div>
    </div>
    <div class="field">
        <label>E-Posta Adresi</label>
        <div class="ui right labeled input">
        <input name="email" placeholder="E-Posta Adresi"
        onkeyup="event.preventDefault();countInput(this,'lblUserEmail')"
        />
        <div class="ui basic label label" id="lblUserEmail">0</div>
        </div>
    </div>

      <div class="field">
        <label>Kullanıcı Profil Fotoğrafı</label>
        <div class="two fields">
            <div class="twelve wide field">
                <div class="ui right labeled input">
                    <input id="image_url" type="text" name="image_url"
                    placeholder="Kullanıcı Profil Fotoğrafı"
                     required onchange="$('#image_url').attr('src',this.value)"
                     onkeyup="event.preventDefault();countInput(this,'lblUserImageUrl')"
                    maxlength="300"/>
                    <div class="ui basic label label" id="lblUserImageUrl">0</div>
                </div>
            </div>
            <div class="four wide field">
                <img id="image_url" class="ui middle aligned tiny image" src="http://placehold.jp/200x150.png" />
            </div>
        </div>
    </div>
    <div class="ui segment">
        <div class="field">
          <div class="ui toggle checkbox">
            <input type="checkbox" name="is_admin" tabindex="0" class="hidden" readonly="" required>
            <label>Kullanıcı yönetici midir ?</label>
          </div>
        </div>
      </div>
    <div class="formBtnRightAlligned">
        <button class="ui button purple" type="submit">Kaydet</button>
    </div>
</form>
</div>
