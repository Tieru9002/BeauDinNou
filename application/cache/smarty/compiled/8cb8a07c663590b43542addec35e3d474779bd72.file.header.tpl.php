<?php /* Smarty version Smarty-3.1.1, created on 2012-01-27 12:40:19
         compiled from "application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259504f228b2dd3f5f7-18521359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb8a07c663590b43542addec35e3d474779bd72' => 
    array (
      0 => 'application/views/header.tpl',
      1 => 1327664334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259504f228b2dd3f5f7-18521359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f228b2ddb1da',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f228b2ddb1da')) {function content_4f228b2ddb1da($_smarty_tpl) {?><!DOCTYPE HTML>
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
						<input type="text" name="" class="search-input" value="Search.." />
						<input type="image" src="images/icon-search.png" class="search-submit" alt="Search" />
					</div>
				</form>
			</div>
		</div>
	</header>
	
	<!-- Title incl. Logo & Social Media Buttons -->
	<section id="title">
		<h1><a href="/" title="Logo"><img src="images/logo.png" alt="Logo" /></a></h1>
		<ul>
			<li class="call"><b>Call Us</b> <span class="underline">+49 5181 9313356</span></li>
			<li class="twitter"><a href="http://twitter.com/indiqo" title="Twitter">Twitter</a></li>
			<li class="facebook"><a href="http://facebook.com/bartel" title="Facebook">Facebook</a></li>
			<li class="flickr"><a href="http://www.flickr.com/photos/indiqomedia" title="Flickr">Flickr</a></li>
			<li class="rss"><a href="feed://themeforest.net/feeds/users/indiqo" title="RSS">RSS</a></li>
		</ul>
	</section>


<?php }} ?>