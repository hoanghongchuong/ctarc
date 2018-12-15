$(document).ready(function($){	
	var owl = $(".owl-carousel-project");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'], 
	  		autoplay:true, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:1,									            									            
		        },
		        600:{
		            items:1,          
		        },
		        1000:{
		            items:1,  
		        }
		    }
		});

		var owls = $(".owl-carousel-partner");
	  	owls.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'], 
	  		autoplay:true, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 1000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:2,									            									            
		        },
		        600:{
		            items:3,          
		        },
		        1000:{
		            items:4,  
		        }
		    }
		});

		if($('[data-fancybox="video"]').length) {
	        $('[data-fancybox="video"]').fancybox({
	            type: 'iframe'
	        });
	    }
	    $('.slider-for').slick({
		  	slidesToShow: 1,
		  	slidesToScroll: 1,
		  	arrows: false,
		  	fade: true,
		  	asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		  	slidesToShow: 8,
		  	slidesToScroll: 1,
		  	asNavFor: '.slider-for',
		  	dots: true,
		  	centerMode: true,
		  	focusOnSelect: true
		});

});

var MobileMenu = function () {
        var mobileMenu = $("#menu");

        if (mobileMenu.length) {
            mobileMenu.mmenu({
                "extensions": [
                    // "fx-panels-zoom",
                    "pagedim-black",
                    // "theme-dark"
                ],
                "offCanvas": {
                    // "position": "right"
                },
                "navbars": [
                    {
                        "position": "top",
                        "content": [
                            "<a class='fa fa-envelope' href='#/'></a>",
                            "<a class='fa fa-twitter' href='#/'></a>",
                            "<a class='fa fa-facebook' href='#/'></a>"
                        ]
                    }
                ]
            });
        }

};
