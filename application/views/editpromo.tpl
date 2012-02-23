{extends file="adminheader.tpl"}

{block body}
    <form method="POST" action="" enctype="multipart/form-data">
    <table>
        <tr class="formitem"><td><label for="url" class="label">url</label></td><td><input type="text" name="url" value="{$promo.url}" id="url"></td></tr>                     

        </td></tr>                        
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        
        <tr class="formitem"><td><input type="submit" value="Edit promo"></td><td></td></tr>           
        <input type="hidden" name="edit" value="success">
    </table>       
    </form>
    <img src="{$base_url}public/uploads/promo_{$promo.picture}" />
{/block}