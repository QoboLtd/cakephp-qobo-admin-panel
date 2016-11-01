$(document).on('ready', function() {
	$('[data-toggle=offcanvas]').click(function() {
        console.log('offcanvas');
		$('.row-offcanvas').toggleClass('active');
		$('.sidebar-collapse').toggleClass('in').toggleClass('hidden-xs').toggleClass('visible-xs');

        //expanding page-content while right-sidebar is collapsed.
        if( $('.row-offcanvas').hasClass('active') ) {
            $('#sidebar-toggler').find('i').removeClass('fa-angle-double-right').addClass('fa-angle-double-left');
            $('.right-sidebar').toggleClass('col-lg-3').toggleClass('col-lg-1');
            $('.page-content').toggleClass('col-lg-9').toggleClass('col-lg-11');
        } else {
            $('#sidebar-toggler').find('i').removeClass('fa-angle-double-left').addClass('fa-angle-double-right');
            $('.right-sidebar').toggleClass('col-lg-1').toggleClass('col-lg-3');
            $('.page-content').toggleClass('col-lg-11').toggleClass('col-lg-9');
       }
    });
});
