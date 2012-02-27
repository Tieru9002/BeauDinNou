$(document).ready(function() {

	/* Drop Down Menu */
	$("header li.dropdown").click(function () {
      	$(this).toggleClass("expanded");
    });
	
	/* Featured Product Price Overlay */
	$("#featured .regular .product").mouseover(function () {
		$(this).find(".overlay").css("display","block");
	}).mouseout(function () {
		$(this).find(".overlay").css("display","none");
	});
	
	$("#featured .responsive .product").click(function () {
		$(this).find(".overlay").toggle('fast');
	});
	
	/* Sale Product Price Overlay */
	$(".sale .regular .product").mouseover(function () {
		$(this).find(".overlay").css("display","block");
	}).mouseout(function () {
		$(this).find(".overlay").css("display","none");
	});
	
	$(".sale .responsive .product").click(function () {
		$(this).find(".overlay").toggle('fast');
	});
	
	/* Expanding Search Input Field */
	
	$(".search-input").focus(function() {
		$(this).attr("value","").css("width","201px");
	}).focusout(function () {
		$(this).css("width","85px");
	});
	
	/*Log in animation */
	
	$("#login_btn").click(function() {
		$("#logged_out").slideUp(function() {
			$("#logged_in").slideDown();
			});
		
	});
	
	/*Log out animation */
	
	
	/* Remove Contents fron Newsletter Input Field */
	
	$(".newsletter-input").focus(function() {
		$(this).attr("value","");
	});
	
	/* Slideshow Control */
	$(".slider.regular").simplecarousel({
		width: 705,
		height: 300,
		visible: 1,
		auto: 8000,
		next: $('.slider-next'),
		prev: $('.slider-prev'),
		pagination: false,
		layout: "regular",
		fade: true
	});
	
	$(".slider.responsive").simplecarousel({
		width: 300,
		height: 214,
		visible: 1,
		auto: 8000,
		next: $('.slider-next'),
		prev: $('.slider-prev'),
		pagination: false,
		layout: "responsive",
		fade: true
	});
	
	/* Featured Products Control */
	$(".featured.regular").simplecarousel({
		width: 705,
		height: 240,
		visible: 1,
		auto: 8000,
		next: $('.featured-next'),
		prev: $('.featured-prev'),
		pagination: false,
		vertical: true,
		layout: "regular"
	});
	$(".featured.responsive").simplecarousel({
		width: 300,
		height: 231,
		visible: 1,
		auto: 8000,
		next: $('.featured-next'),
		prev: $('.featured-prev'),
		pagination: false,
		vertical: true,
		layout: "responsive"
	});
	
	/* Initializes Twitter Feed */
	$(function($){
		$(".tweet").tweet({
			join_text: "auto",
			username: "indiqo",
			count: 2,
			auto_join_text_default: "we said,",
			auto_join_text_ed: "we",
			auto_join_text_ing: "we were",
			auto_join_text_reply: "we replied",
			auto_join_text_url: "we shared",
			loading_text: "Loading Tweets.."
		});
	});	
           
});