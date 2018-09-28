<div class="col-md-9 col-lg-9">
    <div class="row pb-3">
        {if isset($user_Type) && $user_Type <= 1}
            {if isset($dau_r)}
                {foreach $dau_r as $r}
                    <div class="col-md-6 col-lg-4 col-xl-3 pb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="text-left col-md-6">Nickname: </div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-12"><strong>{$r.u_Nickname}</strong></div>
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <div class="row">
                                    <div class="text-left col-md-6">Id: </div>
                                    <div class="text-right col-md-6"><strong>{$r.uId}</strong></div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-6">Typ: </div>
                                    <div class="text-right col-md-6">
                                        <strong>
                                            {if $r.u_UserType == 1}
                                                Administrator
                                            {elseif $r.u_UserType == 2}
                                                Moderator
                                            {elseif $r.u_UserType == 3}
                                                Dziennikarz
                                            {/if}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-6">Login: </div>
                                    <div class="text-right col-md-6"><strong>{$r.u_Login}</strong></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="edit_user_i/{$r.uId}">Edytuj</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="delete_user btn btn-outline-primary" id="{$r.uId}">Usuń</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            {/if}
        {/if}
    </div>
</div>
