{if isset($header)}
{$header}
{/if}
{if isset($logged) && $logged == false}
    {$content}
{/if}
{if isset($logged) && $logged == true}
{$navbar}
{$menu}
{$content}
{/if}
{if isset($header)}
{$footer}
{/if}
