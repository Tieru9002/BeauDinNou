{extends file="adminheader.tpl"}

{block body}

    <form enctype="multipart/form-data" method="post">
        <table>
            <tr class="formitem"><td><label for="name">Nume</label></td><td><input type="text" name="name" id="name"></td></tr>
            <tr class="formitem"><td><label for="parent">Parinte</label></td><td>           
            <select name="parent">
                <option value="0">Categorie root</option>
                {foreach $parents item=parent}                    
                    <option value="{$parent.id}">{$parent.name}</option>
                {/foreach}
            </select>
            </td></tr>
            <tr class="formitem"><td><label for="description">Descriere</label></td><td><textarea name="description" id="description"></textarea></td></tr>
        </table>
        <input type="hidden" name="add" value="success">
        <input type="submit" value="Adauga categorie">
    </form>

    <table border=1 >
        <tr>
            <th>id</th>
            <th>nume</th>
            <th>parent level 1</th>
            <th>actiuni</th>
         </tr>
         {foreach from=$parents item=category}
         <tr>
            <td>{$category.id}</td>
            <td>{$category.name}</td>
            <td>{$category.parent}</td>
            <td><a href="{$base_url}index.php/admin/editcategory/{$category.id}">edit</a> <a href="{$base_url}index.php/admin/deletecategory/{$category.id}" onClick="return confirm('Stergeti aceasta categorie?'); return false;">sterge</a></td>
         </tr>
         {/foreach}
    </table>

{/block}