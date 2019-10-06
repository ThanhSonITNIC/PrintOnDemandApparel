$(document).ready(function() {
	// Adding the clear Fix
	cols1 = $('#column-right, #column-left').length;
	
	if (cols1 == 2) {
		$('#content .product-layout:nth-child(2n+1)').after('<div class="clearfix visible-md visible-sm"></div>');
	} else if (cols1 == 1) {
		$('#content .product-layout:nth-child(3n+3)').after('<div class="clearfix visible-lg"></div>');
	} else {
		$('#content .product-layout:nth-child(4n+4)').after('<div class="clearfix"></div>');
	}
	
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();
		
		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});


	/* Search */
//	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
//		url ='category.html';
//
//		var value = $('header input[name=\'search\']').val();
//
//		if (value) {
//			url += '&search=' + encodeURIComponent(value);
//		}
//
//		location = url;
//	});
//
//	$('#search input[name=\'search\']').on('keydown', function(e) {
//		if (e.keyCode == 13) {
//			$('header input[name=\'search\']').parent().find('button').trigger('click');
//		}
//	});
	

	// Product List
	$('#list-view').click(function() {
		$('.product-layout > .clearfix').remove();

		$('.product-layout').attr('class', 'product-layout product-list col-xs-12');

		localStorage.setItem('display', 'list');
		$('.product-name:parent').each(function () {
    	$(this).insertBefore($(this).prev('.rating'));
		});
	});

	// Product Grid
	$('#grid-view').click(function() {
		$('.product-layout > .clearfix').remove();

		cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('.product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
			$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');

		} else if (cols == 1) {
			$('.product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
			$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');

		} else {
			$('.product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
			$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');

		}

		 localStorage.setItem('display', 'grid');
		 $('.rating:parent').each(function () {
    	$(this).insertBefore($(this).prev('.product-name'));
		});
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
	} else {
		$('#grid-view').trigger('click');
	}

	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});


