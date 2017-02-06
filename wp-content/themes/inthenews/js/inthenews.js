// $ no conflict wrapper
jQuery( document ).ready ( function ($) {
	// Button behavior for displaying and removing news cards 
	$( document ).ready( function(){
		
		$(".viewAllNews").hide();

		var newsBoxes = $(".news-box");
		
		$(".icbutton").on("click touch", function () {

		    var theID  = $(this).data("id"); 
		   
		    $(this).addClass("activeIc").siblings().removeClass("activeIc");

		    newsBoxes.filter(function() {
		    	$(".viewAllNews").show();

		        if ( $(this).data("category") === theID ){
		        	return $(this).addClass("activeCat");
		        }
		        else {
		        	return $(this).removeClass("activeCat");
		        }
		    });

		});


		$(".viewAllNews").on("click touch", function () {
			$(newsBoxes).addClass("activeCat");
			$(".icbutton").addClass("activeIc");
			$(".viewAllNews").hide();
		});

		$(newsBoxes).addClass("activeCat");
		$(".icbutton").addClass("activeIc");

	});

	// $(window).scroll(function(){
 //        if( $(this).scrollTop() > 25 )
 //            $('.navbar-fixed-top').addClass('sm-header');
 //        else
 //            $('.navbar-fixed-top').removeClass('sm-header');
 //    });
});
