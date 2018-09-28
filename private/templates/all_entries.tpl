<div class="col-md-9 col-lg-9">
    {if isset($dae_r)}
        {foreach $dae_r as $r}
        <div class="row pb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body text-left">
                        <h4 class="card-title"><strong>{$r.n_Title}</strong></h4>
                        <p class="card-text">{$r.n_Content}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-left">
                                <div class="row">
                                    <div class="col-md-2 pt-1">
                                        <small class="text-muted text-left">Autor: {$r.n_AuthorNickname}</small>
                                    </div>
                                    {if isset($user_Type) && $user_Type <= 2}
                                    <div class="col-md-2">
                                        <button class="btn btn-outline-primary" href="edit_entry_i/{$r.nId}">Edytuj</button>
                                    </div>
                                    <div class="offset-md-3 col-md-2">
                                        <a class="delete_entry btn btn-outline-primary" id="{$r.nId}">Usun</a>
                                    </div>
                                    {/if}
                                    <div class="col-md-3 pt-1 text-right">
                                        <small class="text-muted text-right">Data dodania: {$r.n_Date}</small>
                                    </div>
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
