{$header}
{if isset($logged) && $logged == false}
    {$content}
{/if}
{if isset($logged) && $logged == true}
{$navbar}
{$menu}
{$content}
{/if}
{$footer}
