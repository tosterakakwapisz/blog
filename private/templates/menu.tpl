<div class="col-md-2 col-sm-2 pb-3">
    <div class="list-group">
        <button id="mainpagenav"  class="list-group-item list-group-item-action pointer mojemenu">Strona główna</button>
        <button id="allentriesnav"  class="list-group-item list-group-item-action pointer mojemenu">Wpisy</button>
        {if (isset($user_Type) && ($user_Type <= 2))}
            <button id="createentryinterface"  class="list-group-item list-group-item-action pointer mojemenu">Utwórz wpis</button>
            {if isset($user_Type) && $user_Type == 1}
                <button id="createuserinterface"  class="list-group-item list-group-item-action pointer mojemenu">Stworz usera</button>
                <button id="displayusers"  class="list-group-item list-group-item-action pointer mojemenu">Uzytkownicy</button>
            {/if}
        {/if}
        <button id="logout"  class="list-group-item list-group-item-action list-group-item-secondary pointer">Log out</button>
    </div>
</div>
