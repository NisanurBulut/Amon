<form autoComplete="off" class="ui form" method="POST" action="{{ route('users.updateUser', $user->id) }}">
    {{ csrf_field() }}
    <h4 class="ui dividing header">Kullanıcı Bilgileri</h4>
    <div class="three fields">
        <div class="field">
            <label>Ad Soyad</label>
            <div class="ui right labeled input">
                <input id="name" type="text" name="name" placeholder="Kullanıcı adı ve soyadı" required
                    value="{{ $user->name }}" onkeyup="event.preventDefault();countInput(this,'lblUser_name')"
                    maxlength="255" />
                <div class="ui basic label label" id="lblUser_name">255</div>
            </div>
        </div>
        <div class="field">
            <label>Kullanıcı Adı</label>
            <div class="ui right labeled input">
                <input name="username" required name="username" value="{{ $user->username }}"
                    placeholder="Kullanıcı adı" maxlength="255"
                    onkeyup="event.preventDefault();countInput(this,'lblUsername')" />
                <div class="ui basic label label" id="lblUsername">255</div>
            </div>
        </div>
        <div class="field">
            <label>Parola</label>
            <div class="ui right labeled input">
                <input name="password" value="{{ $user->password }}" required placeholder="Parola" maxlength="6"
                    onkeyup="event.preventDefault();countInput(this,'lblPassword')" />
                <div class="ui basic label label" id="lblPassword">6</div>
            </div>
        </div>
    </div>
    <div class="field">
        <label>E-Posta Adresi</label>
        <div class="ui right labeled input">
            <input type="email" name="email" required value="{{ $user->email }}" placeholder="E-Posta adresi"
                maxlength="255" onkeyup="event.preventDefault();countInput(this,'lblUserEmail')" />
            <div class="ui basic label label" id="lblUserEmail">255</div>
        </div>
    </div>

    <div class="field">
        <label>Kullanıcı Profil Fotoğrafı</label>
        <div class="two fields">
            <div class="twelve wide field">
                <div class="ui right labeled input">
                    <input id="image_url" type="text" name="image_url" placeholder="Kullanıcı profil fotoğrafı" required
                        value="{{ $user->image_url }}" onchange="$('#image_url_src').attr('src',this.value)"
                        onkeyup="event.preventDefault();countInput(this,'lblUserImageUrl')" maxlength="200" />
                    <div class="ui basic label label" id="lblUserImageUrl">200</div>
                </div>
            </div>
            <div class="four wide field">
                <img id="image_url_src" name="image_url" class="ui middle aligned tiny image"
                    src="http://placehold.jp/200x150.png" />
            </div>
        </div>
    </div>
    <div class="ui segment">
        <div class="field">
            <div class="ui toggle checkbox">
                <input type="checkbox" name="is_admin" id="is_admin" tabindex="0" readonly=""
              @if (!$user->is_admin==0)
                  checked
              @endif
                >
                <label class="ui yellow">Kullanıcı yönetici midir ?</label>
            </div>
        </div>
    </div>
    <div class="formBtnRightAlligned">
        <button class="ui button purple" type="submit">Kaydet</button>
    </div>
</form>
</div>
