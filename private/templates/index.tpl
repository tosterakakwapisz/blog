{if isset($header)}
    {$header}
{/if}
{if isset($logged) && $logged == false}
    {$content}
{/if}
{if isset($logged) && $logged == true}
    {$menu}
    {if isset($content)}
        {$content}
    {/if}
{/if}
{if isset($footer)}
    {$footer}
{/if}
