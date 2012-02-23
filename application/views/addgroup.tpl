{extends file="adminheader.tpl"}

{block body}

    <form enctype="multipart/form-data" method="post">
        <table>
            <tr class="formitem"><td><label for="name">Nume</label></td><td><input type="text" name="name" id="name"></td></tr>                       
        </table>
        <input type="hidden" name="add" value="success">
        <input type="submit" value="Adauga group">
    </form>

    <table border=1 >
        <tr>
            <th>id</th>
            <th>nume</th>            
         </tr>
         {foreach from=$groups item=group}
         <tr>
            <td>{$group.id}</td>
            <td>{$group.subprod_name}</td>           
         </tr>
         {/foreach}
    </table>

{/block}