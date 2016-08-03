



jQuery( document ).ready(function( $ ) {

  	var $grid =  $('.grid').isotope({
	  // options
	  itemSelector		: '.portfolio-pieces',
	  layoutMode		: 'fitRows',
	});


	$('.btn-group-filter').on( 'click', 'button', function() {
		$('button').removeClass('active');
		$(this).addClass('active');
		var filterValue = $(this).data('filter');
		$grid.isotope({ filter: filterValue });
	});

});
