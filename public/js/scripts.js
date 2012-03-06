$(document).ready(function() {


	/*Forgot Password lightbox */
	$("#forgot_link").fancybox({
		padding		: 0,
		maxWidth	: 360,
		maxHeight	: 180,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		type		: 'iframe'
	});

        /*Change Password lightbox */
	$("#changePwd_link").fancybox({
		padding		: 10,
		maxWidth	: 380,
		maxHeight	: 260,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		type		: 'iframe'
	});

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
	
	/*Log out animation */
	$("#logout_btn").click(function() {
		$("#logged_in").slideUp(function() {
			$("#logged_out").slideDown();
			});
		
	});
	
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
    
	/* Checkout Details Expansion Animation */
	$("#trimite_btn").click(function (){
		if ($("#formDeliveryInfo").is(':hidden')) {
			$("#formDeliveryInfo").slideDown();}
	});
        
        /*Add invoice data animation on button click*/
        $("#newInvoiceData_btn").click(function (){
            if ($("#formInvoiceData").is(':hidden')) {
                $("#formInvoiceData").slideDown(function (){
                    $(".firstField").focus();
                });
            }
        });
        
        /*Add invoice data animation on edit button click*/
        $("#modifyInvoiceData_btn").click(function (){
            if ($("#formInvoiceData").is(':hidden')) {
                $("#formInvoiceData").slideDown(function (){
                    $(".firstField").focus();
                });
            }
        });
        /*Close invoice data form if the "close" button is clicked*/
        $("#inchideInvoiceData_btn").click(function (){            
            $("#fieldDenumireFirma").val("");
            $("#fieldCui").val("");
            $("#fieldOrdineRegistru").val("");
            $("#fieldBankAcc").val("");
            $("#fieldBankName").val("");                
            $("#fieldAddress").val("");                
            $("#send").val("success");
            $("#formInvoiceData").slideUp();            
        });
        /*Add address animation on button click*/
        $("#newAddress_btn").click(function (){
            if ($("#formAddresses").is(':hidden')) {
                $("#formAddresses").slideDown(function (){
                    $(".firstField").focus();
                });
            }
        });
        /*Close invoice data form if the "close" button is clicked*/
        $("#inchideAddresses_btn").click(function (){
            $("#formAddresses").slideUp();
            $("#fieldAddress").val("");            
            $("#send").val("success");
            $("#formInvoiceData").slideUp();             
        });
});