<div class="col-12 col-sm-12 col-md-3 sidebar pb-3">
    <div class="sidebar-sticky">
        <ul class="nav flex-column nav-pills">
            <li class="nav-item"><a id="mainpagenav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer"> Strona główna</a></li>
            <li class="nav-item nav-item-dark"><a id="allentriesnav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Wpisy</a></li>
            {if (isset($user_Type) && ($user_Type <= 2))}
                <li class="nav-item"><a id="createentryinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Utwórz wpis</a></li>
                {if isset($user_Type) && $user_Type == 1}
                    <li class="nav-item"><a id="createuserinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Stwórz usera</a></li>
                    <li class="nav-item"><a id="displayusers" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Użytkownicy</a></li>
                {/if}
            {/if}
            <li class="nav-item"><a id="logout" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Log out</a></li>
        </ul>
    </div>
</div>
<div class="col-12 col-sm-12 col-md-9 " id="jscontent">
</div>








{*

/**********************************************************************************************************************/

<div class="col-12 col-sm-12 col-md-3 pb-3">
    <div class="list-group">
        <button id="mainpagenav"  class="list-group-item list-group-item-action list-group-item-dark pointer mojemenu">Strona główna</button>
        <button id="allentriesnav"  class="list-group-item list-group-item-action list-group-item-dark pointer mojemenu">Wpisy</button>
        {if (isset($user_Type) && ($user_Type <= 2))}
            <button id="createentryinterface"  class="list-group-item list-group-item-action list-group-item-dark pointer mojemenu">Utwórz wpis</button>
            {if isset($user_Type) && $user_Type == 1}
                <button id="createuserinterface"  class="list-group-item list-group-item-action list-group-item-dark pointer mojemenu">Stworz usera</button>
                <button id="displayusers"  class="list-group-item list-group-item-action list-group-item-dark pointer mojemenu">Uzytkownicy</button>
            {/if}
        {/if}
        <button id="logout"  class="list-group-item list-group-item-action list-group-item-dark pointer">Log out</button>
    </div>
</div>

            <button id="mainpagenav"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Strona główna</button>
            <button id="allentriesnav"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Wpisy</button>
            {if (isset($user_Type) && ($user_Type <= 2))}
                <button id="createentryinterface"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Utwórz wpis</button>
                {if isset($user_Type) && $user_Type == 1}
                    <button id="createuserinterface"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Stworz usera</button>
                    <button id="displayusers"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Uzytkownicy</button>
                {/if}
            {/if}
            <button id="logout"  class="list-group-item list-group-item-action list-group-item-dark pointer">Log out</button>
*}
