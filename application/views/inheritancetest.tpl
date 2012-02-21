{* Extend our master template *}
{extends file="master.tpl"}

{* This block is defined in the master.php template *}
{block name=title}
    {$title}
{/block}
qweqwewqe

{foreach from=$test item=foo}
    <li>{$foo}</li>
{/foreach}

{* This block is defined in the master.php template *}
{block name=body}
    {$body}
{/block}