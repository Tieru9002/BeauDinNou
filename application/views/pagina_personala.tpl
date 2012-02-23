{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}

<section id="content">
	
		<section id="left-column">
					
			<!-- Main Content Area -->
			<section id="main">
			
				<h2>Cosul de cumparaturi</h2>
				<p>Cosul dumneavoastra contine urmataorele iteme</p>
				<form method="post" action="">
					{foreach from=$cartitems item=cartitem name=cart}
                                        <div class="product-cart">                                                
						<img src="{$base_url}/public/uploads/list_cat_{$cartitem.options.picture}" alt="Product Image" />
						<h2><a href="" title="Moo Cards">{$cartitem.name}</a></h2>	
						<p>{$cartitem.descriere}</p>
						<label for="amount-product-1">Amount <a href="{$base_url}index.php/products/removeFromCart/{$cartitem.id}" title="Remove">(Remove)</a></label>
						<input type="text" name="qty{$smarty.foreach.cart.index}" id="amount-product-1" value="{$cartitem.qty}" size="2" />
						<h2 class="item">{$cartitem.price} RON</h2>
					</div>
                                        {/foreach}
					
					<div class="total">
						<h3>Total: <b>{$totalprice}</b></h3>
					</div>
                                        <input type="hidden" name="updatecart" value="success" />
					<div class="right">
						<input type="submit" name="update" class="button" value="Update" />
						<input type="submit" name="checkout" class="button" value="Checkout" />
					</div>	
				</form>
								
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