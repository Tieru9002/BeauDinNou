{extends file="adminheader.tpl"}
{block submenu}
<ul class="subnav" >
<li> <a href="{$base_url}index.php/admin/addprod">Add Product</a> </li>
{/block}
{block body}
    <table style="border:1px solid;">
        <tr>
           <th>id</th>
           <th>nume</th>
           <th>pret</th>
           <th>categorie</th>
           <th>actiuni</th>
        </tr>
    {foreach from=$products item=product}
    <tr>
        <td>{$product.id}</td>
        <td>{$product.name}</td>
        <td>{$product.price}</td>
        <td>{$product.cat_id}</td>        
        <td><a href="{$base_url}index.php/admin/editproduct/{$product.id}">edit</a> <a href="{$base_url}index.php/admin/deleteProduct/{$product.id}" onClick="return confirm('Stergeti acest produs?'); return false;">sterge</a></td>
    <tr>



    {/foreach}
    </table>
{/block}