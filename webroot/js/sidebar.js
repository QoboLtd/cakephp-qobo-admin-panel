$(document).on('ready', function() {
	$('[data-toggle=offcanvas]').click(function() {
		$('.row-offcanvas').toggleClass('active');
		$('.sidebar-collapse').toggleClass('in').toggleClass('hidden-xs').toggleClass('visible-xs');

        //expanding page-content while right-sidebar is collapsed.
        if( $('.row-offcanvas').hasClass('active') ) {
            $('.right-sidebar').toggleClass('col-lg-3').toggleClass('col-lg-1');
            $('.page-content').toggleClass('col-lg-9').toggleClass('col-lg-11');
        } else {
            $('.right-sidebar').toggleClass('col-lg-1').toggleClass('col-lg-3');
            $('.page-content').toggleClass('col-lg-11').toggleClass('col-lg-9');
       }
    });
});
