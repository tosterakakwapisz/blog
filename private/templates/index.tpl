{if isset($header) && isset($navbar)}
{$header}
{$navbar}
{/if}
{if isset($logged) && $logged == false}
    {$content}
{/if}
{if isset($logged) && $logged == true}
{$menu}
{$content}
{/if}
{if isset($footer)}
{$footer}
{/if}
