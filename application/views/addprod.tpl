{extends file="adminheader.tpl"}

{block body}
    <form method="POST" action="" enctype="multipart/form-data">
    <table>
        <tr class="formitem"><td><label for="name" class="label">Nume</label></td><td><input type="text" name="name" id="name"></td></tr>        

        <tr class="formitem"><td><label for="cat">Categorie</label></td><td>
        
        <select name="cat">
            {foreach $categories item=cat}
                <option value="{$cat.id}">{$cat.name}</option>
            {/foreach}
        </select>
         </td></tr> 
         <tr class="formitem"><td><label for="cat">Subgrup</label></td><td>
        <select name="subgroup">
            {foreach $subgroups item=subgroup}
                <option value="{$subgroup.id}">{$subgroup.subprod_name}</option>
            {/foreach}
        </select>
        
        </td></tr>        

        <tr class="formitem"><td>Descriere produs</td><td><textarea name="description"></textarea></td>
        <tr class="formitem"><td><label for="price">Pret</span></label></td><td><input type="text" name="price" id="price"></td></tr>        
        <tr class="formitem"><td><label for="meta_key">Meta keywords</label></td><td><input type="textarea" name="meta_key" id="meta_key"></td></tr>        
        <tr class="formitem"><td><label for="meta_desc">Meta description</label></td><td><input type="textarea" name="meta_desc" id="meta_desc"></td></tr>
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        <tr class="formitem"><td><label for="promo">Promo</label></td><td><input type="checkbox" name="promo" {if {$product.promo} == 1} checked="yes" {/if}>                                                                                         
        <tr class="formitem"><td><label for="featured_d">Featured Dinamic</label></td><td><input type="checkbox" name="featured_d" {if {$product.featured_d} == 1} checked="yes" {/if}>     
        <tr class="formitem"><td><label for="featured_s">Featured Static</label></td><td><input type="checkbox" name="featured_s" {if {$product.featured_s} == 1} checked="yes" {/if}>                                                                                         
        <tr class="formitem"><td><label for="featured_s">Speciale</label></td><td><input type="checkbox" name="specials" {if {$product.specials} == 1} checked="yes" {/if}>                                                                                         
        <tr class="formitem"><td><input type="submit" value="Add product"></td><td></td></tr>        
        <input type="hidden" name="add" value="success">
    </table>       
    </form>
{/block}