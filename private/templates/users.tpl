<div class="col-md-12 col-lg-12 jscontent px-0">
    {assign var=n value=0}
    <div class="row pb-3 js_entry">
        {if isset($user_Type) && $user_Type <= 1}
            {if isset($dau_r)}
                {foreach $dau_r as $r}
                    {assign var=n value=$n+1}
                    <div class="col-md-3 col-lg-3 col-xl-3 pb-3 " id="{$n}">
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
                                        <button data-editid="{$r.uId}" class="btn btn-outline-primary jsedituser">Edytuj</button>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button data-deleteid="{$r.uId}" data-n="{$n}" class="delete_user btn btn-outline-primary jsdeleteuser" id="{$r.uId}">Usuń</button>
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
