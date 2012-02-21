<section id="login">
				<h2>Contul Tau</h2>
                <form action="" method="post" id="log">
    				<input class="user_log" type="text" name="email" class="login" placeholder="Adresa de email" value="">
    				<input class="user_log" type="password" name="pass" class="login" placeholder="Parola" value="" onclick="this.value='';">    
					<!--
					onclick="this.value='';"
    				<input type="hidden" name="login" value="success">
    				<input type="submit" value="login"> -->
					</br>
					<input type="submit" name="Intra in cont" class="button" id="button1"  value="Intra in cont"> 
                                        <a href="{$base_url}index.php/user/register"><input type="button" name="Cont nou" class="button" id="button2" value="Cont nou" ></a>
					<div style="clear:both;"></div>
					<div id="uitat"><a href="www.google.ro">Ai uitat parola?</a></div>
                                        <input type="hidden" value="success" name="login">
				</form>
				
			</section>