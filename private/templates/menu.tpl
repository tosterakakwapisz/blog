<div class="col-md-2 col-lg-2">
    <div class="list-group">
        <a href="/" class="list-group-item list-group-item-action list-group-item-primary">Strona główna</a>
        <a href="/entries" class="list-group-item list-group-item-action">Wszystkie wpisy {* ZROBIC DROPDOWN MENU*}</a>
        {if (isset($user_Type) && ($user_Type <= 2))}
            <a href="/create_entry_i" class="list-group-item list-group-item-action">Utwórz wpis</a>
            {if isset($user_Type) && $user_Type == 1}
                <a href="/create_user_i" class="list-group-item list-group-item-action">Stworz uzytkownika</a>
                <a href="/users" class="list-group-item list-group-item-action">Uzytkownicy</a>
            {/if}
        {/if}
        <a href="/logout" class="list-group-item list-group-item-action list-group-item-secondary">Log out</a>
    </div>
</div>
