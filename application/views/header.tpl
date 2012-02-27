<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Storefront &mdash; Pro E-Commerce Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="stylesheet" type="text/css" href="{$base_url}public/css/style.css" media="screen" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        {literal}
            <script type="text/javascript">
            $(document).ready(function(){
    
        $("#button1").click(function(){

        username=$("#email").val();
        password=$("#password").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/iarbeau/index.php/user/login",
            data: "email="+username+"&pass="+password+"&login=success",
            success: function(html){
                alert(html);
                if (html=="true") {
                    alert ("e corecte");
                }
                else {
                    alert("nu e corect");
                }
            }    
        });        
    });
});    
                
            
            </script>
        {/literal}
        <!-- 	
	Simple Carousel
	Copyright (c) 2010 Tobias Zeising, http://www.aditu.de
	Licensed under the MIT license
	Version 0.3
	
	http://code.google.com/p/simple-carousel
        -->
        <script src="{$base_url}public/js/slider.js"></script>
        
        <!-- JQuery Twitter Feed -->
        <script src="{$base_url}public/js/tweet.js"></script>
        
        <!-- Script Controls -->
        <script src="{$base_url}public/js/scripts.js"></script>        
        
</head>
<body>

	<!-- Header incl. Navigation & Search -->
	<header>
		<div class="texture">
			<div class="wrap">
				<nav>
					<ul>
						<li class="active"><a href="{$base_url}index.php" title="Home">Home</a></li>
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
						<input type="image" src="{$base_url}public/images/icon-search.png" class="search-submit" alt="Search" />
					</div>
				</form>
			</div>
		</div>
	</header>
	
	<!-- Title incl. Logo & Social Media Buttons -->
	<section id="title">
		<h1><a href="{$base_url}index.php" title="Logo">iarbeau.ro</a></h1>
		<ul>
			<li class="call"><b>Contactati-ne</b> <span class="underline">+40 722 559 557</span></li>
			<li class="twitter"><a href="http://twitter.com/indiqo" title="Twitter">Twitter</a></li>
			<li class="facebook"><a href="http://facebook.com/bartel" title="Facebook">Facebook</a></li>
			<li class="flickr"><a href="http://www.flickr.com/photos/indiqomedia" title="Flickr">Flickr</a></li>
			<li class="rss"><a href="feed://themeforest.net/feeds/users/indiqo" title="RSS">RSS</a></li>
		</ul>
	</section>
{block name=leftcolumn}
{/block}
{block name=centercolumn}
{/block}
{block name=rightcolumn}
{/block}
{block name=footer}
{/block}