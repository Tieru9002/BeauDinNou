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
			
                        {include file='specials.tpl'}
			
			<!-- Secondary Feature Area â€” Useful for Sales -->
			
			{include file='featured_s.tpl'}
                        
		</section>
{/block}

{block rightcolumn}
<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			
                        {include file='cartsummary.tpl'}
			
			<!-- Popular Products -->
			<section id="popular">
            
				<h2>Popular Things</h2>
				<ul>
					<li class="even">
						<div class="product-preview"><a href="product.htm" title="E-Book"><img src="assets/product-6.jpg" alt="E-Book" /></a></div>
						<a href="product.htm" title="E-Book"><b>E-Book</b></a>
						<small>29.00</small>
					</li>
					<li class="odd">
						<div class="product-preview"><a href="product.htm" title="Generic Cards"><img src="assets/product-5.jpg" alt="Generic Cards" /></a></div>
						<a href="product.htm" title="Generic Business Cards"><b>Generic Cards</b></a>
						<small>12.99</small>
					</li>
					<li class="even">
						<div class="product-preview"><a href="product.htm" title="Rockstar Freelancer"><img src="assets/product-4.jpg" alt="Rockstar Freelancer" /></a></div>
						<a href="product.htm" title="Rockstar Freelancer Paperback"><b>Rockstar Freelancer</b></a>
						<small>29.00</small>
					</li>
					<li class="odd">
						<div class="product-preview"><a href="product.htm" title="Moo Cards"><img src="assets/product-2.jpg" alt="Moo Cards" /></a></div>
						<a href="product.htm" title="Moo Cards"><b>Moo Cards</b></a>
						<small>33.00 <del>34.99</del></small>
					</li>
					<li class="even">
						<div class="product-preview"><a href="product.htm" title="Rockable Cards"><img src="assets/product-3.jpg" alt="Rockable Cards" /></a></div>
						<a href="product.htm" title="Rockable Cards"><b>Rockable Cards</b></a>
						<small>7.99</small>
					</li>
				</ul>
                
			</section>
			<!-- Tag Filter -->
			<section id="tags">
				<h2>Categorii</h2>
				<ul>
					<li class="even"><a href="collection.htm" title="Advertisement">Advertisement</a></li>
					<li class="odd"><a href="collection.htm" title="Book">Book</a></li>
					<li class="even"><a href="collection.htm" title="Brochure">Brochure</a></li>
					<li class="odd"><a href="collection.htm" title="Business Cards">Business Cards</a></li>
					<li class="even"><a href="collection.htm" title="Paperback">Paperback</a></li>
					<li class="odd"><a href="collection.htm" title="E-Book">E-Book</a></li>
				</ul>
			</section>
            
            <!--Log In Window-->
            {include file="login_form.tpl"}
			
			<!-- Contact Information -->
			<section id="contact">
				<h2>Get in Touch</h2>
				<ul>
					<li class="even address">Street Name, ZIP Code, City</li>
					<li class="odd phone"><a href="tel:+4951819313356" title="Phone">+49 5181 9313356</a></li>
					<li class="even email"><a href="mailto:hello@indiqo.eu" title="E-Mail">hello@indiqo.eu</a></li>
					<li class="odd web"><a href="http://indiqo.eu" title="Website">www.indiqo.eu</a></li>
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