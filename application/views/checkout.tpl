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
						<!--<img src="{$base_url}/public/uploads/list_cat_{$cartitem.options.picture}" alt="Product Image" />-->
						<h2><a href="" title="Moo Cards">{$cartitem.name}</a></h2>
						<label for="amount-product-1">Cantitate</label>
						<input type="text" name="qty{$smarty.foreach.cart.index}" id="amount-product-1" value="{$cartitem.qty}" size="2" />
						<h2 class="item">{$cartitem.price} RON</h2>
					</div>
                                        {/foreach}
					
					<div class="total">
						<h3>Total: <b>{$totalprice}</b></h3>
					</div>
                                        <input type="hidden" name="sendorder" value="success" />
					<div class="right">						
						<input type="submit" name="send" class="button" value="Inapoi la cumparaturi" />
					</div>	
				</form>
				<hr />
				<p>Daca aveti deja un cont, va rugam sa va logati. Daca sunteti logat, datele necesare pentru trimiterea comenzii se pot prelua din baza de date. Astfel, puteti expedia mai repede si mai usor comanda. </p>
				<!-- Formular de login -->
				<div id="formLoginCheckout" class="form">                                                
					<form method="post" action="">
						<div class="fieldWrapper">
							<label for="fieldUsername" class="styled">Adresa de email</label>
							<div class="thefield">
								<input type="text" name="fieldUsername" size="40" />
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldPassword" class="styled">Parola</label>
							<div class="thefield">
								<input type="password" name="fieldPassword" size="40" />
							</div>
						</div>
						<div class="buttonsDiv">
							<input type="button" name="Intra in cont" class="button" id="login_btn"  value="Intra in cont">
						</div>
					</form>
				</div>
				
				<!-- Formular de introducere a datelor de comanda -->
				<div id="formDeliveryInfo" class="form">                                                
					<form method="post" action="">
						<div class="fieldWrapper">
							<label for="fieldEmail2" class="styled">Adresa de email</label>
							<div class="thefield">
								<input type="text" name="fieldEmail2" size="40" />
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldName" class="styled">Prenume</label>
							<div class="thefield">
								<input type="text" name="fieldName" size="40" />
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldSurname" class="styled">Nume</label>
							<div class="thefield">
								<input type="text" name="fieldSurname" size="40" />
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldPhone" class="styled">Numar de telefon</label>
							<div class="thefield">
								<input type="text" name="fieldPhone" size="40" />
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldAddress" class="styled">Adresa de livrare</label>
							<div class="thefield">
								<textarea cols="34" rows="4" name="fieldAddress"></textarea>
							</div>
						</div>
						<div class="fieldWrapper">
							<label for="fieldComms" class="styled">Alte comentarii</label>
							<div class="thefield">
								<textarea cols="34" rows="4" name="fieldComms"></textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="buttonsDiv">
							<input type="button" name="Intra in cont" class="button"  id="trimite_btn" value="Trimite Comanda">
							<input type="button" name="Intra in cont" class="button"  value="Modifica Comanda">
							<input type="button" name="Intra in cont" class="button"  value="Renunta la Comanda">
				</div>
								
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