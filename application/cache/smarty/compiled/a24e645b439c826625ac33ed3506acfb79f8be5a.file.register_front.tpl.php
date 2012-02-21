<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 22:06:35
         compiled from "application/views/register_front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140704f43ddcdafe340-15125024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a24e645b439c826625ac33ed3506acfb79f8be5a' => 
    array (
      0 => 'application/views/register_front.tpl',
      1 => 1329857411,
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
    'b0613f8a2fb994519e498c825860f7d78d4205ed' => 
    array (
      0 => 'application/views/cartsummary.tpl',
      1 => 1329082190,
      2 => 'file',
    ),
    '8de856b884431e75d977250c1af1c6f508120838' => 
    array (
      0 => 'application/views/login_form.tpl',
      1 => 1329858393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140704f43ddcdafe340-15125024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f43ddcddfd92',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f43ddcddfd92')) {function content_4f43ddcddfd92($_smarty_tpl) {?><!DOCTYPE HTML>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('left_column.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '140704f43ddcdafe340-15125024');
content_4f44075b4eaaf($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "left_column.tpl" */?>

<section id="content">
	
		<section id="left-column">
		
			<section id="main">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/promo_141838_700b.jpg" style="width:648px;"/>
                            <p>Veți avea posibilitatea, prin logarea la contul Dvs., de a prelua datele înregistrate anterior de Dvs., pentru completarea formularului necesar transmiterii comenzii, precum și de le vizualiza, pentru rectificarea lor sau adăugarea unor informații noi.

                                Datele furnizate de Dvs. în acest formular sunt supuse termenilor și conditiilor iarbeau.ro.</p>
                            <div class="validation" <?php if (count($_smarty_tpl->tpl_vars['errors']->value)==0){?> style="display:none;"<?php }?>>
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>                            
                                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>                            
                            <?php } ?>
                            </ul>
                            </div>
                            <table>
                             <form action="" method="post" id="register">
                                 <tr><td><label class="register_label" for="email_address">Email</label></td>
    				<td><input class="register_input" id="email_address" type="text" name="email" class="login" placeholder="Adresa de email" value=""> </td></tr>
                                 <tr><td><label class="register_label" for="pass1">Parola</label></td>
    				<td><input class="register_input" type="password" id="pass1" name="pass1" class="login" placeholder="Parola" value="" onclick="this.value='';"></td></tr>
                             <tr><td><label class="register_label" for="pass2">Confirma parola</label></td>
                                <td><input class="register_input" type="password" id="pass2" name="pass2" class="login" placeholder="Parola" value="" onclick="this.value='';"></td></tr>    					
                             <input type="hidden" value="success" name="register">
                             <tr><td>
                             </td>
				<td>	<input type="submit" name="Intra in cont" class="button" id="register_button1"  value="Inregistreaza-te acum"> 
					<div style="clear:both;"></div></td>					
                                
				</form>
                            </table>
                            
                            
			</section>
						
			
			
		</section>
		
		






<aside>
		
			<!-- Cart incl. Summary, Product List & View Cart Link -->
			<?php /*  Call merged included template "cartsummary.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cartsummary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '140704f43ddcdafe340-15125024');
content_4f44075b5d4ad($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "cartsummary.tpl" */?>									
                        
                        <?php /*  Call merged included template "login_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '140704f43ddcdafe340-15125024');
content_4f44075b6245d($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 22:06:35
         compiled from "application/views/left_column.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f44075b4eaaf')) {function content_4f44075b4eaaf($_smarty_tpl) {?><section id="content">
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
		</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 22:06:35
         compiled from "application/views/cartsummary.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f44075b5d4ad')) {function content_4f44075b5d4ad($_smarty_tpl) {?><section id="cart">
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
</section><?php }} ?><?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 22:06:35
         compiled from "application/views/login_form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f44075b6245d')) {function content_4f44075b6245d($_smarty_tpl) {?><section id="login">
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
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/user/register"><input type="button" name="Cont nou" class="button" id="button2" value="Cont nou" ></a>
					<div style="clear:both;"></div>
					<div id="uitat"><a href="www.google.ro">Ai uitat parola?</a></div>
                                        <input type="hidden" value="success" name="login">
				</form>
				
			</section><?php }} ?>