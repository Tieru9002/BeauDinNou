{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}

<section id="content">
	
		<section id="left-column">
		
			<section id="main">
				<h2>{$category.name}</h2>
				<p>{$category.description}</p>
			</section>
			
			<!-- Current Category Products -->
			<section id="featured" class="category">
				<h1>Produsele din aceasta categorie</h1>
				<ul class="featured">
				
					<!-- Repeatable Area Begin — Each incl. up to 6 Products -->
					<li class="even">
						<div class="product">
							<img src="{$base_url}public/uploads/jack-daniels-whiskey-1.jpg" alt="Product Image" />
								
						</div>
						<div class="product_dreapta">
								<h2><a href="http://www.google.com">Produsul satanei</a></h2>
								<h3><span>12.50</span> RON</h3>
								<p>Daca luam in considerare capacitatea neo-modernista de a divulga secretele controversate ale interopilor sindicalisti, atunci nu ne mai ramane ...</p>
								<a href="www.google.com">Detalii</a>
						</div>
					</li>
					<li class="odd">
						
					</li>
				</ul>
				
			</section>

			
			<!-- Specials — Please note that a class="last" will be required for the last item in the row -->
			<section id="specials">
				<ul>
					<li class="first"><a href="index.htm" title="Black Friday Sale"><img src="assets/special-left.jpg" alt="Product Image" /></a></li>
					<li class="second"><a href="index.htm" title="Gift Ideas"><img src="assets/special-center.jpg" alt="Product Image" /></a></li>
					<li class="third"><a href="index.htm" title="Social Media"><img src="assets/special-right.jpg" alt="Product Image" /></a></li>
				</ul>
			</section>
			
			<!-- Secondary Feature Area — Useful for Sales -->
			<section class="sale">
				<h1>Black Friday Sale <a href="collection.htm" title="See All Products">See All Products</a></h1>
				<ul>
					<li class="slide">

						<div class="product">
							<img src="assets/product-2.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Colored Cards</h2>
									<ul>
										<li><b>12</b>.95 <del>14.95</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="product">
							<img src="assets/product-6.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Rockstar Freelancer Paperback</h2>
									<ul>
										<li><b>39</b>.00 <del>44.00</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="product">
							<img src="assets/product-8.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Mini Cards</h2>
									<ul>
										<li><b>6</b>.95 <del>9.95</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="product">
							<img src="assets/product-11.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Rockable Press</h2>
									<ul>
										<li><b>12</b>.95 <del>9.95</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="product">
							<img src="assets/product-4.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Rockstar Freelancer Paperback</h2>
									<ul>
										<li><b>29</b>.00 <del>19.00</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="product">
							<img src="assets/product-12.jpg" alt="Product Image" />
							<div class="overlay">
								<div class="price">
									<h2>Another Book</h2>
									<ul>
										<li><b>32</b>.95 <del>29.95</del></li>
										<li class="details"><a href="product.htm" title="More Details">More Details</a></li>
									</ul>
								</div>	
							</div>
						</div>
										
					</li>
				</ul>				
			</section>
			
		</section>
		
		

{/block}
{block rightcolumn}

<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			{include file='cartsummary.tpl'}
			
			<!-- Popular Products -->
			<section id="popular">
				<h2>Popular Products</h2>
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
				<h2>Browse by Tag</h2>
				<ul>
					<li class="even"><a href="collection.htm" title="Advertisement">Advertisement</a></li>
					<li class="odd"><a href="collection.htm" title="Book">Book</a></li>
					<li class="even"><a href="collection.htm" title="Brochure">Brochure</a></li>
					<li class="odd"><a href="collection.htm" title="Business Cards">Business Cards</a></li>
					<li class="even"><a href="collection.htm" title="Paperback">Paperback</a></li>
					<li class="odd"><a href="collection.htm" title="E-Book">E-Book</a></li>
				</ul>
			</section>
			
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