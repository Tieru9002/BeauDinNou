<section id="login">
				<h2>Contul Tau</h2>

                <form action="" class="log" method="post">
					<div id="logged_out">
    				<input id="email" class="user_log" type="text" name="email" class="login" placeholder="Adresa de email" value="">
    				<input id="password" class="user_log" type="password" name="pass" class="login" placeholder="Parola" value="" onclick="this.value='';">    
					</br>
					<input type="" name="Intra in cont" class="button" id="login_btn"  value="Intra in cont"> 
                    <a href="{$base_url}index.php/user/register"><input type="button" name="Cont nou" class="button" id="button2" value="Cont nou" ></a>

					<div style="clear:both;"></div>
					<div id="uitat"><a href="www.google.ro">Ai uitat parola?</a></div>
                    <input type="hidden" value="success" name="login">
					</div>
				</form>
				<form action="" class="log" method="post">
                	<div id="logged_in">
						<a href="www.google.ro"><p><u>Date personale</u></p></a>
    					<a href="www.google.ro"><p><u>Date de facturare</u></p></a>
                    	<a href="www.google.ro"><p><u>Adrese de livrare</u></p></a>
						<a class="various" href="http://www.youtube.com/embed/4mmCMUPCNgE?autoplay=1"><p><u>Schimba parola</u></p></a>
            			<input type="button" name="Delogheaza-ma" class="button" id="logout_btn" value="Delogheaza-ma" >
					</div>
                	
                    <div style="clear:both"></div>
                </form>
				
			</section>