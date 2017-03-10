 (function($) {

	"use strict";
		$(document).ready(function() {
			
			//Js code for Preloader
			jQuery(window).load(function(){
				jQuery('#loading').remove('#loading');
				$("#loading").delay(2000).fadeOut(500);
				$("#loading-center").click(function() {
				$("#loading").fadeOut(500);
				})
			});
			
			//Js code for Header Top 
			var $sohag = $("#sohag"),
			$clone = $sohag.after($sohag.clone().addClass("clone"));
			$(window).on("scroll", function() {
				var fromTop = $(window).scrollTop();
				$("body").toggleClass("down", (fromTop > 250));
			});
			
			//js for scroll to Top Button
			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 900) {
					$('.scrollToTop').fadeIn();
				} else {
					$('.scrollToTop').fadeOut();
				}
			});
			
			//Click event to scroll to top
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			
			//Js code for search box 
			$(".first_click").click(function(){
				$(".first_click").hide();
				$(".second_click").css('display','block');
				$(".mainmenu-area").addClass("sohag_box");	 
			});
			$(".second_click").click(function(){
				$(".second_click").hide();
				$(".first_click").css('display','block');
				$(".mainmenu-area").removeClass("sohag_box"); 
			});	
		});
})(jQuery);	  
			

	


