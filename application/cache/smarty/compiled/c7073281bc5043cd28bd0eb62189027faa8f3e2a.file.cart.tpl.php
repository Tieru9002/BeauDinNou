<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:04:19
         compiled from "application/views/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170664f353bc4e67317-30093510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7073281bc5043cd28bd0eb62189027faa8f3e2a' => 
    array (
      0 => 'application/views/cart.tpl',
      1 => 1329080047,
      2 => 'file',
    ),
    '8cb8a07c663590b43542addec35e3d474779bd72' => 
    array (
      0 => 'application/views/header.tpl',
      1 => 1329783564,
      2 => 'file',
    ),
    'b0613f8a2fb994519e498c825860f7d78d4205ed' => 
    array (
      0 => 'application/views/cartsummary.tpl',
      1 => 1329082190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170664f353bc4e67317-30093510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f353bc510412',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f353bc510412')) {function content_4f353bc510412($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Storefront &mdash; Pro E-Commerce Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/style.css" media="screen" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <!-- 	
	Simple Carousel
	Copyright (c) 2010 Tobias Zeising, http://www.aditu.de
	Licensed under the MIT license
	Version 0.3
	
	http://code.google.com/p/simple-carousel
        -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/slider.js"></script>
        
        <!-- JQuery Twitter Feed -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/tweet.js"></script>
        
        <!-- Script Controls -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/scripts.js"></script>        
        
</head>
<body>

	<!-- Header incl. Navigation & Search -->
	<header>
		<div class="texture">
			<div class="wrap">
				<nav>
					<ul>
						<li class="active"><a href="index.htm" title="Home">Home</a></li>
						<li class="dropdown">
							<a title="Catalog">Catalog</a>
							<ul>
								<li class="even"><a href="collection.htm" title="Black Friday Sale">Black Friday Sale</a></li>
								<li class="odd"><a href="collection.htm" title="Current Specials">Current Specials</a></li>
								<li class="even"><a href="collection.htm" title="Gifts &amp; Coupons">Gifts &amp; Coupons</a></li>
								<li class="odd"><a href="collection.htm" title="Ink &amp; Toner">Ink &amp; Toner</a></li>
								<li class="even"><a href="collection.htm" title="Office Supplies">Office Supplies</a></li>
								<li class="odd"><a href="collection.htm" title="Accessories">Accessories</a></li>
								<li class="even"><a href="collection.htm" title="Furniture">Furniture</a></li>
								<li class="odd"><a href="collection.htm" title="Paper">Paper</a></li>
								<li class="even"><a href="collection.htm" title="Filing &amp; Storage">Filing &amp; Storage</a></li>
								<li class="odd"><a href="collection.htm" title="Calendars &amp; Planners">Calendars &amp; Planners</a></li>
								<li class="even"><a href="collection.htm" title="Pens &amp; Markers">Pens &amp; Markers</a></li>
								<li class="odd"><a href="collection.htm" title="Printers &amp; Scanners">Printers &amp; Scanners</a></li>
							</ul>	
						</li>
						<li><a href="blog.htm" title="Blog">Blog</a></li>
						<li><a href="page.htm" title="About">About</a></li>
					</ul>
				</nav>
				<form method="get" action="search.htm">
					<div>
						<input type="text" name="" class="search-input" value="Cauta.." />
						<input type="image" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/images/icon-search.png" class="search-submit" alt="Search" />
					</div>
				</form>
			</div>
		</div>
	</header>
	
	<!-- Title incl. Logo & Social Media Buttons -->
	<section id="title">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php" title="Logo">iarbeau.ro</a></h1>
		<ul>
			<li class="call"><b>Contactati-ne</b> <span class="underline">+40 722 559 557</span></li>
			<li class="twitter"><a href="http://twitter.com/indiqo" title="Twitter">Twitter</a></li>
			<li class="facebook"><a href="http://facebook.com/bartel" title="Facebook">Facebook</a></li>
			<li class="flickr"><a href="http://www.flickr.com/photos/indiqomedia" title="Flickr">Flickr</a></li>
			<li class="rss"><a href="feed://themeforest.net/feeds/users/indiqo" title="RSS">RSS</a></li>
		</ul>
	</section>

<section id="content">
	
		<section id="left-column">
					
			<!-- Main Content Area -->
			<section id="main">
			
				<h2>Cosul de cumparaturi</h2>
				<p>Cosul dumneavoastra contine urmataorele iteme</p>
				<form method="post" action="">
					<?php  $_smarty_tpl->tpl_vars['cartitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cartitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cartitem']->key => $_smarty_tpl->tpl_vars['cartitem']->value){
$_smarty_tpl->tpl_vars['cartitem']->_loop = true;
?>
                                        <div class="product-cart">                                                
						<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/uploads/<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['picture'];?>
" alt="Product Image" />
						<h2><a href="" title="Moo Cards"><?php echo $_smarty_tpl->tpl_vars['cartitem']->value['name'];?>
</a></h2>	
						<p><?php echo $_smarty_tpl->tpl_vars['cartitem']->value['descriere'];?>
</p>
						<label for="amount-product-1">Amount <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/removeFromCart/<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['id'];?>
" title="Remove">(Remove)</a></label>
						<input type="text" name="qty" id="amount-product-1" value="<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['qty'];?>
" size="2" />
						<h2 class="item"><?php echo $_smarty_tpl->tpl_vars['cartitem']->value['price'];?>
 RON</h2>
					</div>
                                        <?php } ?>
					
					<div class="total">
						<h3>Total: <b><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</b></h3>
					</div>
                                        <input type="hidden" name="qwerty" value="success" />
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




	<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			
                        <?php /*  Call merged included template "cartsummary.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cartsummary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '170664f353bc4e67317-30093510');
content_4f43dca38d8fa($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "cartsummary.tpl" */?>
			
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
<?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:04:19
         compiled from "application/views/cartsummary.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43dca38d8fa')) {function content_4f43dca38d8fa($_smarty_tpl) {?><section id="cart">
        <h2><a href="" title="View Cart"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/images/icon-cart.png" alt="Cart" /></a>Cartul dumneavoastra</h2>
        <p>Cartul dvs contine<b> <?php echo $_smarty_tpl->tpl_vars['cartnritems']->value;?>
 cumparaturi</b> in valoare de <b><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
 RON</b></p>
        <ul>
                <?php  $_smarty_tpl->tpl_vars['cartitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cartitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cart']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cartitem']->key => $_smarty_tpl->tpl_vars['cartitem']->value){
$_smarty_tpl->tpl_vars['cartitem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cart']['iteration']++;
?>
                <li  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cart']['iteration']%2==0){?> class="even" <?php }else{ ?>class="odd"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['qty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['cartitem']->value['name'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['cartitem']->value['qty'];?>
</b><?php echo $_smarty_tpl->tpl_vars['cartitem']->value['name'];?>
</a>
                </li>
                <?php } ?>					
        </ul>
        <p class="right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/index.php/products/viewcart" title="View Cart"><b>View Cart</b></a></p>
</section><?php }} ?>