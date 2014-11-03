jQuery(function($){
	
	$(document).ready(function() {
		
		// LOADER 
		$('body').jpreLoader({
			
			showSplash: false,
			autoClose: true,
			
		});
		
		// VIDEO SETUP
		jQuery('.player').mb_YTPlayer();
		
		$('#volume').click(function(){
			
			$('#bgndVideo').toggleVolume();
		});
		
		// LIGHTBOX 
		$('.lightbox').fancybox();	
				
		// CAROUSELS						
		$("#serv-carousel").owlCarousel({
			
			autoPlay: false,	
			stopOnHover: true,			 
			itemsCustom: [
				[0, 1],
				[600, 2],
				[900, 3],
			],
							 
		});
		
		$("#post-carousel").owlCarousel({
			
			autoPlay: true,					 
			singleItem: true,
			stopOnHover: true,	
			pagination: true,
			navigation: true,
			navigationText: false,
			
		});
		
		$("#quote-carousel").owlCarousel({
			
			autoPlay: false,					 
			singleItem: true,
			stopOnHover: true,	
			transitionStyle: "goDown",
			 
		});
		
		$("#blog-carousel").owlCarousel({
			
			autoPlay: false,	
			pagination: true,
			stopOnHover: true,	
			navigation: true,
			navigationText: false,
			itemsCustom: [
				[0, 1],
				[600, 2],
				[900, 3],
			],	
						 
		});

		$("#clients-carousel").owlCarousel({
			
			autoPlay: false,	
			stopOnHover: true,	
			itemsCustom: [
				[0, 1],
				[600, 4],
				[900, 6],
			],				 
		});				
	
	});
		

	$(window).load(function() {
		
		// RESPONSIVE FIX
		
		if( $(window).width() < 1200 ) {
			$('.transit-words').removeClass('transit-words');
		}
		
		function GetURLParameter(sParam){
			
		   var query = window.location.search.substring(1);
		   var vars = query.split("&");
		   for (var i=0;i<vars.length;i++) {
				   var pair = vars[i].split("=");
				   if(pair[0] == sParam){return pair[1];}
		   }
		   return(false);
		   
		}
		
		// CHANGE PAGE
		$('a').click(function(event) {
			
			var href = $(this).attr('href');
			var curtain = $(this).data('curtain');
           
		    if( href != undefined && href != '#' && !$(this).hasClass('lightbox') &&  curtain != false) { 
			
			   event.preventDefault();
			   
			   $('#curtain').animate({width: "100%"},500,'easeOutQuint');
			   
			   var demoColor = GetURLParameter('color');
			   
			   if(demoColor) {
			   		setTimeout(function(){ window.location.replace(href+'?color='+demoColor); }, 1000);
			   }else{
				   	setTimeout(function(){ window.location.replace(href); }, 1000);
			   }
			   
			}
			
        });
		
		
		/* SCROLL TO SECTIONS */
		$('*[data-scrollto]').click(function(){
			
			var dest = $(this).data('scrollto');				
			var pixels = $(dest).offset().top - 70;			
			var ms = Math.round(1000 + pixels/5);
			
			$('html, body').animate({				
				scrollTop: pixels
			}, ms, 'easeOutQuint');
			 
		}); 
		
		// TOOLTIPS
		$('#icons-menu ul li').hover(
			function(){
				var title = $(this).data('title');
				$(this).append( '<div class="tooltip" id="icons-tooltip">' + title + '</div>' );
				var moveL = $('#icons-tooltip').width() / 2 - 13;
				$('#icons-tooltip').css('margin-left','-'+moveL+'px');
			}, 
			
			function(){
				$('#icons-tooltip').remove();
			}
		);
		
		$('#quick-icons ul.quick-menu li').hover(
			function(){
				var title = $(this).data('title');
				$(this).append( '<div class="tooltip-top" id="icons-tooltip-top">' + title + '</div>' );
			}, 
			
			function(){
				$('#icons-tooltip-top').remove();
			}
		);
		
		// BTN UP
		$('.btn-up').click(function(){
			$('html, body').animate({				
				scrollTop: 0
			}, 2000, 'easeOutQuint');
		});
		
		
		// PURE EFFECTS 
		$('[class^="transit-"], [class*=" transit-"]').each(function() {
			
			// Delay
			delay = $(this).data('delay');
			if (delay == ''){delay = 0;}
			$(this).css('animation-delay', delay+'ms');
			
			// Appear
			appear = $(this).data('appear');
			
			// Class
			var animClass;
			if ($(this).hasClass('transit-left')) {animClass = 'fadeInLeft';}
			if ($(this).hasClass('transit-right')) {animClass = 'fadeInRight';}
			if ($(this).hasClass('transit-top')) {animClass = 'fadeInUp';}
			if ($(this).hasClass('transit-bottom')) {animClass = 'fadeInDown';}
			if ($(this).hasClass('transit-fade')) {animClass = 'fadeIn';}
			if ($(this).hasClass('transit-bouncein')) {animClass = 'bounceIn';}
			if ($(this).hasClass('transit-flip')) {animClass = 'flipInY';}
			if ($(this).hasClass('transit-pulse')) {animClass = 'pulse';}
			if ($(this).hasClass('transit-bounce')) {animClass = 'bounce';}
			if ($(this).hasClass('transit-rotate')) {animClass = 'rotateIn';}
			
			// Animation
			if(appear == false){
				
				$(this).addClass('animated');
				$(this).addClass(animClass);
				
			}else{
				
				$(this).appear(function(){
					
					$(this).addClass('animated');
					$(this).addClass(animClass);
					
				},{accX: 0, accY: -200});
			}
				
        });
		
		
		// TEXT EFFECT		
		$('.transit-words').appear(function() {			
			$(this).textillate({
						
			  loop: false,
			  initialDelay: 0,
			  autoStart: true,
			  in: {	
			  
				effect: 'fadeIn',
				delayScale: 1.5,
				delay: 30,
				shuffle: true,	
						
			  }			
			});					
		},{accX: 0, accY: -200});
		
		
		// SCROLLING EVENTS
		$(window).scroll(function(iconsPos){
									
			var quote = $(window).scrollTop();
			var iconsPos = $(window).height() - 100;


			// Menu		
			if(quote >= 100){
				$('.header-clear').addClass('sticky');
				$('#mobile-menu').css('top','70px');
			}
			else{ 
				$('.header-clear').removeClass('sticky');	
				$('#mobile-menu').css('top','');
			}
			
			if(quote >= 30){
				$('.header-dark').addClass('sticky');
				$('#mobile-menu').css('top','70px');
			}
			else{ 
				$('.header-dark').removeClass('sticky');
				$('#mobile-menu').css('top','');
			}
			
			// Icons
			if(quote >= iconsPos){
				
				$('.quick-menu').fadeIn(500);				
				$('.btn-up').fadeIn(500);
				
			}
			else{
				
				$('.quick-menu').fadeOut(500);
				$('.btn-up').fadeOut(500);
				
			}
			
			
		});
	
		
		// MOBILE MENU
		$('.open-menu').click(function(){
			
			$('i', this).toggleClass('icon-menu');
			$('i', this).toggleClass('icon-cross');
			
			$('#mobile-menu').slideToggle(500, 'easeInOutQuint');

		});	
		
		$('#mobile-menu .menu-item-parent').click(function(){
			
			$('.sub-menu', this).slideToggle(500, 'easeInOutQuint');
			
		});
		
		
		// PORTFOLIO
		
		// Masonry
		var $portfolio = $('.port-list');
		
		$portfolio.masonry({
			
		  columnWidth: '.col-1-3',
		  itemSelector: '.col-1-3'
		  
		});
		
		// Filtering
		$('.port-filter li').click(function(){
			
			var filter = $(this).data('filter');
			
			$('.port-filter li').each(function() {
				
				if( $(this).data('filter') == filter ){
					
					$(this).addClass('selected');
					
				}else{
					
					$(this).removeClass('selected');
					
				}
				
			});
			
			$('.port-list .port-item').each(function() {
				
				if(filter == 'all') {
					
					$(this).animate({opacity:1}, 800, 'easeInOutExpo');
				
				}else{
					
					if( $(this).hasClass(filter) ) {
						
						$(this).animate({opacity:1}, 800, 'easeInOutExpo');
						
					}else{
						
						$(this).animate({opacity:0.1}, 800, 'easeInOutExpo');
						
					}
					
				}
                    
            });			
			
		});
		
		
		// VIDEOFOLIO
		var $videofolio = $('.video-list');
		
		$videofolio.masonry({
			
		  columnWidth: '.col-1-3',
		  itemSelector: '.col-1-3'
		
		});
		
		
		
		// COUNTERS
		$('#counters .col-1-4').appear(function(){
			
			 $('.count-value').countTo();
			 
		},{accX: 0, accY: -200});
		
		
		// CONTACT PAGE
		var mapH = $(window).height() - 100;		
		$('#contacts .gmap').css('height', mapH+'px');
		
		// UI ELEMENTS
		
		$('#ui-accordion').accordion();
		
		$('#ui-tabs').tabs();
		
		$('.ui-toggle-header').click(function(){
			$('.ui-toggle-content', this).toggle();
		});
		
	});
});