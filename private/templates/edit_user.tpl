<div class="col-md-10 col-lg-10">
    <form action="/edit_user/{$su_r.uId}" method="POST">
        <div class="row">
            <div class="col-md-9 col-sm-9 pb-2">
                <h4>Edycja uzytkownika</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUNickname"><strong>Nickname: </strong></label>
                <input type="text" class="form-control" id="EditUNickname" name="edit_u_nickname" required value="{$su_r.u_Nickname}"/>
            </div>
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditULogin"><strong>Login: </strong></label>
                <input class="form-control" id="EditULogin" name="edit_u_login" required value="{$su_r.u_Login}"/>
            </div>
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUPasswd"><strong>Password: </strong></label>
                <input type="password"class="form-control" id="EditUPasswd" name="edit_u_passwd"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-left pb-2">
                <h5>Typ uzytkownika</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType1" value="1" required>
                    <label class="form-check-label" for="UserType1"> Admin </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType2" value="2" required>
                    <label class="form-check-label" for="UserType2"> Moderator </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType3" value="3" required>
                    <label class="form-check-label" for="UserType3"> Dziennikarz </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2 text-left py-2">
                <button type="submit" class="btn">Zapisz zmiany</button>
                <a href="/users" class="text-middle px-3">Anuluj</a>
            </div>
        </div>
    </form>
</div>
