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

				<ul id="category">
				{foreach from=$products item=product name=cat_products}                                    
                                    {if $smarty.foreach.cat_products.iteration % 2 != 0}
					<!-- Repeatable Area Begin — Each incl. up to 6 Products -->
					<li class="even">
						<div class="product">
							<a href="{$base_url}index.php/products/singleProduct/{$product.id}"> <img src="{$base_url}public/uploads/list_cat_{$product.picture}" alt="Product Image" /> </a>
								
						</div>
						<div class="product_dreapta">
								<h2><a href="{$base_url}index.php/products/singleProduct/{$product.id}">{$product.name}</a></h2>
								<h3><span>{$product.price}</span> RON</h3>
								<p>{$product.description|substr:0:140} ...</p>
								<a href="{$base_url}index.php/products/singleProduct/{$product.id}">Detalii</a>
						</div>
					</li>
                                    {else}
					<li class="odd">
						<div class="product">
							<a href="{$base_url}index.php/products/singleProduct/{$product.id}"> <img src="{$base_url}public/uploads/list_cat_{$product.picture}" alt="Product Image" /> </a>
								
						</div>
						<div class="product_dreapta">
								<h2><a href="{$base_url}index.php/products/singleProduct/{$product.id}">{$product.name}</a></h2>
								<h3><span>{$product.price}</span> RON</h3>
								<p>{$product.description|substr:0:140} ...</p>
								<a href="{$base_url}index.php/products/singleProduct/{$product.id}">Detalii</a>
						</div>
					</li>
                                  {/if}
                                 {/foreach}
				</ul>
				<div style="float:right;">{$pagination}</div>
                                <div style="clear:both;"></div>
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
			{include file='login_form.tpl'}
                        
                        {include file='contact_info.tpl'}
		
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