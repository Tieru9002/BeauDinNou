{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}

<section id="content">
	
		<section id="left-column">
					
			<!-- Main Content Area -->
			<section id="main">
			
				<div id="Datepersonale_titlu"><h2>Date personale</h2></div>
				
					
					<section id="login">
					
				
                <form action="" method="post" id="Datepersonale_form">
    				<input class="user_log" type="text" name="email"  placeholder="Adresa de email" value=""></br>
					<input class="user_log" type="text" name="prenumele"  placeholder="Prenumele" value=""></br>
					<input class="user_log" type="text" name="numele"  placeholder="Numele" value=""></br>
					<input class="user_log" type="text" name="nr_de_tel"  placeholder="Numarul de telefon" value=""></br>
					<input class="user_log" type="text" name="data_nasterii"  placeholder="Data nasterii" value=""></br>
    				
					<input type="submit" name="Salveaza" class="button" id="button1"  value="Salveaza"> 
                                        
					<div style="clear:both;"></div>
					
				</form>
				
			</section>
					
					
					
					
					
					
					
								
			</section>	
			
			
			
			
			
			
			
			
			
			
			
			
		</section>
{/block}
{block rightcolumn}
	<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			
                        {include file='cartsummary.tpl'}
			
			<!-- Popular Products -->
		{include file="login_form.tpl"}
			
			<!-- Contact Information -->
                {include file="contact_info.tpl"}
		
		</aside>
		
	</section>
{/block}
{block footer}
<footer>
		<section id="bottom">
		
			<!-- Recent News -->
			<section id="recent-news">
				<h2>From Our Blog</h2>
				<ul>
					<li>
						<div class="date">
							<b>29</b>
							<span class="month">Nov</span>
						</div>
						<div class="details">
							This could be the title to one of your articles<br />
							<a href="" title="Comments">11 Comments</a>
						</div>
					</li>
					<li>
						<div class="date">
							<b>22</b>
							<span class="month">Nov</span>
						</div>
						<div class="details">
							This could be yet another headline<br />
							<a href="" title="Comments">0 Comments</a>
						</div>
					</li>
					<li>
						<div class="date">
							<b>17</b>
							<span class="month">Nov</span>
						</div>
						<div class="details">
							A slightly longer headline for demonstration purposes only this time<br />
							<a href="" title="Comments">23 Comments</a>
						</div>
					</li>
				</ul>
			</section>
			
			<!-- Twitter -->
			<section id="latest-tweets">
				<h2>Latest Tweets</h2>
				<div class="tweet"></div>
			</section>
			
			<!-- Information & Newsletter Subscription -->
			<section id="about-us">
				<h2>About Us</h2>
				<div class="introduction">
					<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<form method="post" action="index.htm">
					<div>
						<h2>Subscribe for Our Newsletter</h2>
						<label for="email">Stay informed about exclusive offers with our weekly Newsletter</label>
						<input type="text" id="email" class="newsletter-input" value="Your E-Mail Address" />
						<input type="submit" value="Submit" class="newsletter-submit" />
					</div>
				</form>
			</section>
			
		</section>
		<p><b>Copyright &copy; 2011 Storefront.</b> All Rights Reserved.</p>
		<nav>
			<ul>
				<li class="active"><a href="index.htm" title="Home">Home</a></li>
				<li><a href="collection.htm" title="Catalog">Catalog</a></li>
				<li><a href="blog.htm" title="Blog">Blog</a></li>
				<li><a href="page.htm" title="About">About</a></li>
			</ul>
		</nav>
	</footer>
</body>
</html>
{/block}