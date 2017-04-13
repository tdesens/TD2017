$(window).on('load resize', function(){
	var menuH = $('#main-menu ul').height();
	var menuHH = menuH+50;
	
	if ($(window).width() > 768) {
	   $('#main-menu').removeClass('show');
	}else{
		$('#main-menu.top').css({
			'margin-top':-menuHH
		});
	}
});

$(document).ready(function(){
	
	// toggle menu
	$('.nav-toggle .three-lines').on('click', function(){
		$(this).toggleClass('exit');
		$(document).find('#main-menu').toggleClass('show');
	});
	
	// toggle Services Tab to hide open item and show new one
	
	$('[data-toggle="collapse"]').click(function() {
	  $('.collapse.in').collapse('hide');
	});
	
	
});
