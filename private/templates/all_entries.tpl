






<div class="col-md-12 col-sm-12 col-lg-12 col-12 px-0 jscontent" >
        {if isset($dae_r)}
        {assign var=n value=0}
            {foreach $dae_r as $r}
                {assign var=n value=$n+1}
                    <div class="row pb-3 js_entry" id="{$n}">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-left">
                                    <h4 class="card-title"><strong>{$r.n_Title}</strong></h4>
                                    <p class="card-text text-justify">{$r.n_Content}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col text-left">
                                            <div class="row pb-2">
                                                <div class="col-12 col-sm-6 pb-2 px-0">
                                                    <small class="text-muted text-left">
                                                        <div class="col-12">
                                                            Autor:
                                                        </div>
                                                        <div class="col-12">
                                                            {$r.n_AuthorNickname}
                                                        </div>
                                                    </small>
                                                </div>
                                                <div class="col-12 col-sm-6 pt-1">
                                                    <small class="text-muted wyrownanie">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                Data dodania:
                                                            </div>
                                                            <div class="col-12">
                                                                {$r.n_Date}
                                                            </div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
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
                    </div>
            {/foreach}
            {/if}
</div>

<!--

<table>
    <tbody>
    <tr>
</tr>
</tbody>
</table>
-->
