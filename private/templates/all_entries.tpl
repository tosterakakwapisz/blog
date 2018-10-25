<div class="container-fluid">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">AddDate</th>
                {if isset($user_Type) && $user_Type <= 2}
                    <th scope="col">Actions</th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {if isset($dae_r)}
                {$n=0}
                {foreach $dae_r as $r}
                    {$n=$n+1}
                    <tr id="{$n}">
                        <th scope="row">{$n}</th>
                        <td>{$r.n_Title}</td>
                        <td>{$r.n_AuthorNickname}</td>
                        <td>{$r.n_Date}</td>
                        {if isset($user_Type) && $user_Type <= 2}
                            <td>
                                <button data-editid="{$r.nId}" class="btn btn-outline-dark jseditentry"><i class="fas fa-edit"></i></button>
                                <button data-deleteid="{$r.nId}" data-n="{$n}" class="btn btn-outline-dark jsdeleteentry"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        {/if}
                    </tr>
                {/foreach}
            {/if}
            {* //end foreach *}
        </tbody>
    </table>
</div>
