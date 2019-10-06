/* JS is for header cart dropdown */

function cartdropdown(){

	 $(".cart-dropdown-button").click(function(){

        $(".cart-dropdown-menu").slideToggle("slow");

    });

}	

$(document).ready(function(){cartdropdown();});



/* JS for Top button */

(function($) {

    $(document).ready(function(){

 

        //When distance from top = 250px fade button in/out

        $(window).scroll(function(){

            if ($(this).scrollTop() > 250) {

                $('#scrollup').fadeIn(300);

            } else {

                $('#scrollup').fadeOut(300);

            }

        });

 

        //On click scroll to top of page t = 1000ms

        $('#scrollup').click(function(){

            $("html, body").animate({ scrollTop: 0 }, 1000);

            return false;

        });

 

    });

})(jQuery);



/* JS is for responsive menu dropdown */

$(document).ready(function(){

    $(".navbar-toggle").click(function(){

        $(".navbar-collapse").slideToggle("slow");

    });

});



/* JS is for Responsive Menu treeview */

function menuResponsive(){	 

	if ($(window).width() < 980){

		//alert($(window).width());

		$('.nav-responsive').css('display','block');

		if($('.main-navigation').hasClass('treeview')!=true){

			$("#menu").addClass('responsive-menu');

			$("#menu").removeClass('main-menu');

			$("#menu .main-navigation").treeview({

				animated: "slow",

				collapsed: true,

				unique: true		

			});

			$('.main-navigation li').parent().removeClass('expandable');

			$('.main-navigation li').parent().addClass('collapsable');

			$('.main-navigation .main-navigation .collapsable li').css('display','block');		

		}

	

	}else{

		$("#menu .hitarea").remove();

		$("#menu").removeClass('responsive-menu');

		$("#menu").addClass('main-menu');

		$(".main-navigation").removeClass('treeview');

		$("#menu ul").removeAttr('style');

		$('#menu li').removeClass('expandable');

		$('#menu li').removeClass('collapsable');

		$('.nav-responsive').css('display','none');

	}



}

$(document).ready(function(){menuResponsive();});

$(window).resize(function(){menuResponsive();});



/* JS is for category treeview */

function categorytreeview(){		

		if($('.box-category').hasClass('treeview')==true){		

			$(".box-category").treeview({

				animated: "slow",

				collapsed: true,

				unique: true		

			});

			$('.box-category li').parent().removeClass('expandable');

			$('.box-category li').parent().addClass('collapsable');

			$('box-category .box-category .collapsable li').css('display','block');		

		}	

}

$(document).ready(function(){categorytreeview();});



/* JS for Active Grid List */

function gridlistactive(){

$('.btn-list-grid button').on('click', function() {

if($(this).hasClass('grid')) {

  $('.btn-list-grid button').addClass('active');

  $('.btn-list-grid button.list').removeClass('active');

}

  else if($(this).hasClass('list')) {

	$('.btn-list-grid button').addClass('active');

  $('.btn-list-grid button.grid').removeClass('active');

  }

});

}

$(document).ready(function(){gridlistactive();});

$(window).resize(function(){gridlistactive();}); 



/* This JS is for Testimonial slider */ 

$(document).ready(function () { 



	 $('#tabs a').tabs();  	 

	 $('div.product-grid-item:last-child').addClass('last');

	 $('div.product-slider-item:last-child').addClass('last');

	 $('.main-navigation > li:last-child').addClass('last-menu');

});



/* JS is for footer toggle */

function footerToggle(){

	//alert($(window).width());

	if ($(window).width() < 980)

	{

		$("footer .toggle_div").remove();

		$(".footer-title").append( "<a class='toggle_div'>&nbsp;</a>" );

		$(".footer-title").addClass('toggle');

		$("footer .toggle_div").click(function(){

			$(this).parent().toggleClass('active').parent().find('ul').slideToggle('slow');

		});



	}else{

		$(".footer-title").parent().find('ul').removeAttr('style');

		$(".footer-title").removeClass('active');

		$(".footer-title").removeClass('toggle');

		$("footer .toggle_div").remove();

	}	

}

$(document).ready(function(){footerToggle();});

$(window).resize(function(){footerToggle();});



/* JS is for Menu more link */

$(document).ready(function () { 		

			if ($(window).width() > 979 && $(window).width() < 1200){

				var max_elem = 4;

				$('.main-navigation > li').first().addClass('home_first');							

				var items = $('.main-navigation > li');

				var surplus = items.slice(max_elem, items.length);

				surplus.wrapAll('<li class="level-top hiden_menu menu-last"><ul>');

				$('.hiden_menu').prepend('<a href="#" class="level-top">More</a><span class="active_menu"></span>');	

			}

			if ($(window).width() > 1199){

				var max_elem = 6 ;

				$('.main-navigation > li').first().addClass('home_first');							

				var items = $('.main-navigation > li');

				var surplus = items.slice(max_elem, items.length);

				surplus.wrapAll('<li class="level-top hiden_menu menu-last"><ul>');

				$('.hiden_menu').prepend('<a href="#" class="level-top">More</a><span class="active_menu"></span>');	

			}

});



/* JS is for top header */

function topToggle(){

	if ($(window).width() < 980)

	{

		$(".top-toggle").click(function(){

			$(".respo-header-middle").slideToggle("slow");

		});

	}

}

$(document).ready(function(){topToggle();});





/* JS is for Load more for blog */



$(document).ready(function () {

    size_li = $("#blogList li").size();

    x=6;	

	$("#loadMore").hide();

	$("#showLess").hide();

	if(size_li>6){

			$("#loadMore").show();

			$("#showLess").show();

	}

    $('#blogList li:lt('+x+')').show();

    $('#loadMore').click(function () {

        x= (x+4 <= size_li) ? x+4 : size_li;

        $('#blogList li:lt('+x+')').fadeIn(1000);

    });

    $('#showLess').click(function () {

        x=(x-8<0) ? 6 : x-4;

        $('#blogList li').not(':lt('+x+')').fadeOut(1000);

    });

});