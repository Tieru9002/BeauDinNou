<form action="" method="post">
    Email<input type="text" name="email" value="" onclick="this.value='';">
    Pass1<input type="password" name="pass1" value="" onclick="this.value='';">
    Pass2<input type="password" name="pass2" value="" onclick="this.value='';">
    <input type="hidden" name="register" value="success">
    <input type="submit" value="register">
</form>

{foreach from=$errors item=error}
    <li>{$error}</li>
{/foreach}

{$success}