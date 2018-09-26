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
                                <small class="text-muted text-left">Autor: {$r.n_AuthorNickname}</small>
                                {* ZROBIC SKRYPT DO EDYCJI WPISU *}
                                <small class="text-left ml-4">
                                    {if isset($user_Type) && $user_Type <= 2}
                                        <a href="edit_entry_i/{$r.nId}">Edytuj</a>
                                    {/if}
                                </small>

                            </div>
                            <div class="col text-right">
                                <small class="text-muted text-right">Data dodania: {$r.n_Date}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/foreach}
    {/if}
</div>
