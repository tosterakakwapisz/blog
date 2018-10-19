<div class="col-md-2 col-sm-2">
    <div class="list-group">
        <button id="mainpagenav" class="list-group-item list-group-item-action list-group-item-primary btn btn-outline-primary">Strona główna</button>
        <button id="allentriesnav" class="list-group-item list-group-item-action btn ">Wpisy</button>
        {if (isset($user_Type) && ($user_Type <= 2))}
            <button id="createentryinterface" class="list-group-item list-group-item-action btn">Utwórz wpis</button>
            {if isset($user_Type) && $user_Type == 1}
                <button id="createuserinterface" class="list-group-item list-group-item-action btn">Stworz usera</button>
                <button id="displayusers" class="list-group-item list-group-item-action btn">Uzytkownicy</button>
            {/if}
        {/if}
        <button id="logout" class="list-group-item list-group-item-action list-group-item-secondary btn">Log out</button>
    </div>
</div>
