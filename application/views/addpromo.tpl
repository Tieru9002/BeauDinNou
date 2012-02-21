{extends file="adminheader.tpl"}

{block body}
    <form method="POST" action="" enctype="multipart/form-data">
    <table>                
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        <tr class="formitem"><td><label for="url">Url</label></td><td><input type="text" name="url" /> </td>            
        <tr class="formitem"><td><input type="submit" value="Add promo"></td><td></td></tr>        
        <input type="hidden" name="add" value="success">
    </table>       
    </form>
{/block}