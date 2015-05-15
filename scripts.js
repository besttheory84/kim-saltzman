
jQuery(document).ready(function($) {

	
	window.onresize = function() {
		if(window.innerWidth >= 990) {
			$('nav ul').show();
			$('nav ul ul').hide();
			$('.menubutton').removeClass('openmenu');
		}

		if(window.innerWidth <= 990) {
			$('nav ul').hide();
			$('nav ul ul').hide();
			$('.menubutton').removeClass('openmenu');	
		}	
	}
	
	$('.menubutton').click(function() {
		if($(this).hasClass('openmenu')) {
			$(this).removeClass('openmenu');
			$('nav ul').slideUp(250);	
			$('nav ul ul').hide();
		} else {
			$(this).addClass('openmenu');
			$('nav ul').slideDown(250);
			$('nav ul ul').hide();
		}
		
	});	
	
});