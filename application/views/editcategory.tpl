{extends file="adminheader.tpl"}

{block body}
    <form method="POST" action="" enctype="multipart/form-data">
    <table>
        <tr class="formitem"><td><label for="name" class="label">Nume</label></td><td><input type="text" name="name" value="{$category.name}" id="name"></td></tr>        

        <tr class="formitem"><td><label for="parent">Parent</label></td><td>
        
        <select name="parent">
            <option value="0" {if ($category.parent == 0)} SELECTED {/if} > Root </option>
            {foreach $categories item=cat}                
                <option value="{$cat.id}" {if $cat.id == $category.parent} SELECTED {/if}  >{$cat.name}</option>
            {/foreach}
        </select>

        </td></tr>     
        <tr class="formitem"><td><label for="description">Descriere</label></td><td><textarea name="description" id="description">{$category.description}</textarea></td></tr>
        
        <tr class="formitem"><td><input type="submit" value="Add category"></td><td></td></tr>        
        <input type="hidden" name="edit" value="success">
    </table>       
    </form>
{/block}