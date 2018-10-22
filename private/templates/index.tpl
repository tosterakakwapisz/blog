{$header}
{$navbar}
{if isset($logged) && $logged == false}
    {$content}
{/if}
{if isset($logged) && $logged == true}
{$menu}
{$content}
{/if}
{$footer}
