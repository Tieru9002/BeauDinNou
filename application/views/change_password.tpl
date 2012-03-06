<link rel="stylesheet" type="text/css" href="{$base_url}public/css/style.css" media="screen" />

<style type="text/css">
    body, html { 
        -webkit-text-size-adjust: none; 
        -webkit-background-size: 600px 180px;
        background-position: 0px 0px; }
</style>
    
<section id="change_pwd_section">
    <h2>Schimbare Parola</h2>
    <p>Va rugam sa furnizati urmatoarele informatii pentru a va putea schimba parola.</p>
    <form action="" method="post">
        <input id="oldPwd_field" class="field" type="password" name="fieldOldPwd" placeholder="Parola Veche" value="">
        <input id="newPwd_field" class="field" type="password" name="fieldNewPwd" placeholder="Parola Noua" value="">	
        <input id="confPwd_field" class="field" type="password" name="fieldConfPwd" placeholder="Confirma Parola Noua" value="">	
        <input type="submit" name="Confirm" class="button" id="confirm_btn"  value="Confirm"> 
        <input type="hidden" name="send" value="success">
        <input type="button" name="Inchide" class="button" id="close_btn" value="Inchide" onclick="parent.$.fancybox.close();">
        <div style="clear:both;"></div>
    </form>
    {$status}
</section>