{extends file="header.tpl"}
{block leftcolumn}


{include file='left_column.tpl'}

{/block}

{block centercolumn}
		<section id="left-column">
		
			<!-- Product Slideshow -->
                        {include file='promo.tpl'}
			
			<!-- Featured Products -->
			
                        {include file='featured.tpl'}
			
			<!-- Specials â€” Please note that a class="last" will be required for the last item in the row -->
			                        
			
			<!-- Secondary Feature Area â€” Useful for Sales -->
			
			{include file='featured_s.tpl'}
                        
		</section>
{/block}

{block rightcolumn}
<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			
                        {include file='cartsummary.tpl'}						
			
            
            <!--Log In Window-->
            {include file="login_form.tpl"}
			
			<!-- Contact Information -->
			<section id="contact">
				<h2>Get in Touch</h2>
				<ul>
					<li class="even address">{$contact_details.address}</li>
					<li class="odd phone"><a href="{$contact_details.tel}" title="Phone">{$contact_details.tel}</a></li>
					<li class="even email"><a href="{$contact_details.email}" title="E-Mail">{$contact_details.email}</a></li>
					<li class="odd web"><a href="http://www.studiopanase.ro" title="Website">www.studiopanase.ro</a></li>
				</ul>
			</section>
		
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
				<h2>Despre noi</h2>
				<div class="introduction">
					{$contact_details.description}
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