<div class="col-md-9 col-sm-9 col-lg-9 jscontent" >
    {if isset($dae_r)}
        {assign var=n value=0}
            {foreach $dae_r as $r}
                {assign var=n value=$n+1}
        <div class="row pb-3 js_entry" id="{$n}">
            <div class="col">
                <div class="card">
                    <div class="card-body text-left">
                        <h4 class="card-title"><strong>{$r.n_Title}</strong></h4>
                        <p class="card-text">{$r.n_Content}</p>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-left">
                                <div class="d-flex justify-content-between flex-wrap pt-2">
                                    <div class="">
                                        <small class="text-muted text-left">Autor: {$r.n_AuthorNickname}</small>
                                    </div>
                                    <div class="pt-1 text-right flex-wrap">
                                        <div class="flex-wrap">
                                            <small class="text-muted text-right"><div>Data dodania: </div><div>{$r.n_Date}</div></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex pt-2">
                                    {if isset($user_Type) && $user_Type <= 2}
                                    <div class="">
                                        <button data-editid="{$r.nId}" class="btn btn-outline-primary mr-2 jseditentry">Edytuj</button>
                                    </div>
                                    <div class="">
                                        <button data-deleteid="{$r.nId}" data-n="{$n}" class="btn btn-outline-primary jsdeleteentry">Usun</button>
                                    </div>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {/foreach}
    {/if}
</div>
