{extends file="adminheader.tpl"}
{block submenu}
<ul class="subnav" >
<li> <a href="{$base_url}index.php/admin/addpromo">Add Promo</a> </li>
{/block}
{block body}
    <table style="border:1px solid;">
        <tr>
           <th>id</th>
           <th>picture</th>
           <th>url</th>           
        </tr>   
        {foreach from=$list item=promo}
        <tr>
            <td>{$promo.id}</td>
            <td>{$promo.picture}</td>
            <td>{$promo.url}</td>            
            <td><a href="{$base_url}index.php/admin/editpromo/{$promo.id}">edit</a> <a href="{$base_url}index.php/admin/deletepromo/{$promo.id}" onClick="return confirm('Stergeti acest produs?'); return false;">sterge</a></td>
        <tr>
        {/foreach}
 {/block}