<div class="col-md-12 col-lg-12">
    <form action="/edit_user/{$su_r.uId}" id="EditUser" method="POST">
        <div class="row">
            <div class="col-12      col-md-12 col-sm-12 pb-2 text-center">
                <h4>Edycja uzytkownika</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12      col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUNickname"><strong>Nickname: </strong></label>
                <input type="text" class="form-control" id="EditUNickname" name="edit_u_nickname" required value="{$su_r.u_Nickname}"/>
            </div>
            <div class="col-12      col-md-4 col-sm-4 text-left pb-2">
                <label for="EditULogin"><strong>Login: </strong></label>
                <input class="form-control" id="EditULogin" name="edit_u_login" required value="{$su_r.u_Login}"/>
            </div>
            <div class="col-12      col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUPasswd"><strong>Password: </strong></label>
                <input type="password" class="form-control" id="EditUPasswd" name="edit_u_passwd"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12      col-md-5 col-lg-5 text-left pb-2">
                <h5>Typ uzytkownika</h5>
                <div class="form-check">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType1" value="1" required>
                    <label class="form-check-label" for="UserType1"> Admin </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType2" value="2" required>
                    <label class="form-check-label" for="UserType2"> Moderator </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType3" value="3" required>
                    <label class="form-check-label" for="UserType3"> Dziennikarz </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6      col-md-4 col-sm-4 text-center pb-2 pr-1">
                <button type="submit" data-edituserid="{$su_r.uId}" id="edituserbutton" class="btn btn-outline-dark">Zapisz</button>
            </div>
            <div class="col-6      text-center pb-2">
                <button class="btn btn-outline-dark text-middle px-3" id="eu_abort">Anuluj</button>
            </div>
        </div>
    </form>
</div>
