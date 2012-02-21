<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176264f228f1bea2e94-72744587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75639f37d62ed03fbcaf7a96ed341e09e80c2094' => 
    array (
      0 => 'application/views/homepage.tpl',
      1 => 1329848845,
      2 => 'file',
    ),
    '8cb8a07c663590b43542addec35e3d474779bd72' => 
    array (
      0 => 'application/views/header.tpl',
      1 => 1329783564,
      2 => 'file',
    ),
    'bb45af2a52111de8d1386b15e09dd5ef85647a9a' => 
    array (
      0 => 'application/views/left_column.tpl',
      1 => 1329847057,
      2 => 'file',
    ),
    '37ac81325c9be6881d625ca9549132728cce94e7' => 
    array (
      0 => 'application/views/promo.tpl',
      1 => 1329785039,
      2 => 'file',
    ),
    '729ac7909de1d6bc4e67c1f05635651ca27f5408' => 
    array (
      0 => 'application/views/featured.tpl',
      1 => 1329769118,
      2 => 'file',
    ),
    '7197fcfad7af1faf678ce6225473e7a9cbb615ef' => 
    array (
      0 => 'application/views/specials.tpl',
      1 => 1329847284,
      2 => 'file',
    ),
    '6118dd8ac12fe9274b82fc8e40fef3f736880d14' => 
    array (
      0 => 'application/views/featured_s.tpl',
      1 => 1329081942,
      2 => 'file',
    ),
    'b0613f8a2fb994519e498c825860f7d78d4205ed' => 
    array (
      0 => 'application/views/cartsummary.tpl',
      1 => 1329082190,
      2 => 'file',
    ),
    '8de856b884431e75d977250c1af1c6f508120838' => 
    array (
      0 => 'application/views/login_form.tpl',
      1 => 1329848816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176264f228f1bea2e94-72744587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f228f1c27a40',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f228f1c27a40')) {function content_4f228f1c27a40($_smarty_tpl) {?><!DOCTYPE HTML>
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



<?php /*  Call merged included template "left_column.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('left_column.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20eb2cf9($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "left_column.tpl" */?>



		<section id="left-column">
		
			<!-- Product Slideshow -->
                        <?php /*  Call merged included template "promo.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('promo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20ebc17b($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "promo.tpl" */?>
			
			<!-- Featured Products -->
			
                        <?php /*  Call merged included template "featured.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('featured.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20ec1014($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "featured.tpl" */?>
			
			<!-- Specials â€” Please note that a class="last" will be required for the last item in the row -->
			
                        <?php /*  Call merged included template "specials.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('specials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20eca7ad($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "specials.tpl" */?>
			
			<!-- Secondary Feature Area â€” Useful for Sales -->
			
			<?php /*  Call merged included template "featured_s.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('featured_s.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20ed176a($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "featured_s.tpl" */?>
                        
		</section>


<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			
                        <?php /*  Call merged included template "cartsummary.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cartsummary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20ed5890($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "cartsummary.tpl" */?>
			
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
            <?php /*  Call merged included template "login_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '176264f228f1bea2e94-72744587');
content_4f43e20edd08e($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "login_form.tpl" */?>
			
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
<?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/left_column.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20eb2cf9')) {function content_4f43e20eb2cf9($_smarty_tpl) {?><section id="content">
		<section id="lefter-column">
			<aside style="margin-right:5px;">	
				<section id="tags1">
				<h2>Categorii</h2>
				<ul>
                                    <?php  $_smarty_tpl->tpl_vars['rootcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rootcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rootcats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rootcat']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['rootcat']->key => $_smarty_tpl->tpl_vars['rootcat']->value){
$_smarty_tpl->tpl_vars['rootcat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rootcat']['iteration']++;
?>
                                    <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['rootcat']['iteration']%2==0){?> class="even" <?php }else{ ?>class="odd"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singlecat/<?php echo $_smarty_tpl->tpl_vars['rootcat']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rootcat']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rootcat']->value['name'];?>
</a></li>					
                                    <?php } ?>
				</ul>
			</section>
                <section id="popular1">
				<h2>Popular Products</h2>
				<ul>
                                        <?php  $_smarty_tpl->tpl_vars['popitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['popitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popular']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['popitem']->key => $_smarty_tpl->tpl_vars['popitem']->value){
$_smarty_tpl->tpl_vars['popitem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popular']['iteration']++;
?>
					<li  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['popular']['iteration']%2==0){?> class="even" <?php }else{ ?>class="odd"<?php }?>>
						<div class="product-preview"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['popitem']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['popitem']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/menu_small_<?php echo $_smarty_tpl->tpl_vars['popitem']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['popitem']->value['name'];?>
" /></a></div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['popitem']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['popitem']->value['name'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['popitem']->value['name'];?>
</b></a>
						<small><?php echo $_smarty_tpl->tpl_vars['popitem']->value['price'];?>
 </small>
					</li>
                                        <?php } ?>					
				</ul>
			</section>
			</aside>
		</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/promo.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20ebc17b')) {function content_4f43e20ebc17b($_smarty_tpl) {?><section id="slideshow">
        <ul class="slider regular">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <!-- Repeatable Item Begin -->
                <li>
                        <h1>Introducing Storefront <b>PRO</b></h1>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/uploads/promo_<?php echo $_smarty_tpl->tpl_vars['item']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></a>
                </li>	
        <?php } ?>

        </ul>

        <ul class="slider responsive">

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <!-- Repeatable Item Begin -->
                <li>
                        <h1>Introducing Storefront <b>PRO</b></h1>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/uploads/promo_<?php echo $_smarty_tpl->tpl_vars['item']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></a>
                </li>	
        <?php } ?>

        </ul>

        <!-- Slideshow Controls -->
        <a title="Previous" class="slider-prev">Previous</a>
        <a title="Next" class="slider-next">Next</a>

</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/featured.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20ec1014')) {function content_4f43e20ec1014($_smarty_tpl) {?><section id="featured">
        <h1><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/images/icon-featured.png" alt="Featured" />Featured Products</h1>
        <ul class="featured regular">

                <!-- Repeatable Area Begin â€” Each incl. up to 6 Products -->
                <li class="slide">
                        <?php  $_smarty_tpl->tpl_vars['featured'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_d1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featured']->key => $_smarty_tpl->tpl_vars['featured']->value){
$_smarty_tpl->tpl_vars['featured']->_loop = true;
?>
                        <div class="product">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/<?php echo $_smarty_tpl->tpl_vars['featured']->value['picture'];?>
" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</h2>
                                                <ul>
                                                        <li><b><?php echo substr($_smarty_tpl->tpl_vars['featured']->value['price'],0,-2);?>
</b><?php echo substr($_smarty_tpl->tpl_vars['featured']->value['price'],-2,2);?>
 </li>
                                                        <li class="details"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['featured']->value['id'];?>
" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>						
                        <?php } ?>                                                
                </li>
                <!-- Repeatable Area End -->


                <!-- Repeatable Area Begin â€” Each incl. up to 6 Products -->
                <li class="slide">
                        <?php  $_smarty_tpl->tpl_vars['featured'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_d2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featured']->key => $_smarty_tpl->tpl_vars['featured']->value){
$_smarty_tpl->tpl_vars['featured']->_loop = true;
?>
                        <div class="product">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/<?php echo $_smarty_tpl->tpl_vars['featured']->value['picture'];?>
" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</h2>
                                                <ul>
                                                        <li><b><?php echo substr($_smarty_tpl->tpl_vars['featured']->value['price'],0,-2);?>
</b><?php echo substr($_smarty_tpl->tpl_vars['featured']->value['price'],-2,2);?>
</li>
                                                        <li class="details"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['featured']->value['id'];?>
" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>						
                        <?php } ?>       						
                </li>
                <!-- Repeatable Area End -->

        </ul>			

        <!-- Featured Products Controls -->
        <a title="Previous" class="featured-prev">Previous</a>
        <a title="Next" class="featured-next">Next</a>

</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/specials.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20eca7ad')) {function content_4f43e20eca7ad($_smarty_tpl) {?><section id="specials">
        <ul>
                <?php  $_smarty_tpl->tpl_vars['special'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['special']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['specials']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['special']->key => $_smarty_tpl->tpl_vars['special']->value){
$_smarty_tpl->tpl_vars['special']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['specials']['iteration']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specials']['iteration']==1){?>
                <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['special']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/specials_<?php echo $_smarty_tpl->tpl_vars['special']->value['picture'];?>
" alt="Product Image" /></a></li>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specials']['iteration']==2){?>
                <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['special']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/specials_<?php echo $_smarty_tpl->tpl_vars['special']->value['picture'];?>
" alt="Product Image" /></a></li>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specials']['iteration']==3){?>
                <li class="third"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/products/singleproduct/<?php echo $_smarty_tpl->tpl_vars['special']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/specials_<?php echo $_smarty_tpl->tpl_vars['special']->value['picture'];?>
" alt="Product Image" /></a></li>
                <?php }?>                
                <?php } ?>
        </ul>
</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/featured_s.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20ed176a')) {function content_4f43e20ed176a($_smarty_tpl) {?><section class="sale">
        <h1>Black Friday Sale <a href="collection.htm" title="See All Products">See All Products</a></h1>
        <ul>
                <li class="slide">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_s']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <div class="product">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['picture'];?>
" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>
                                                <ul>
                                                        <li><b><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b>.00 <del>14.95</del></li>
                                                        <li class="details"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/index.php/singleproduct/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>
                        <?php } ?>



                </li>
        </ul>				
</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/cartsummary.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20ed5890')) {function content_4f43e20ed5890($_smarty_tpl) {?><section id="cart">
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
</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:27:26
         compiled from "application/views/login_form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f43e20edd08e')) {function content_4f43e20edd08e($_smarty_tpl) {?><section id="login">
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
					<input type="button" name="Cont nou" class="button" id="button2" value="Cont nou">
					<div style="clear:both;"></div>
					<div id="uitat"><a href="www.google.ro">Ai uitat parola?</a></div>
				</form>
				
			</section><?php }} ?>