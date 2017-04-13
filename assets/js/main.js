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
	
	
	// Hidden Form - Contact
	$('#name').on('keyup', function(){
		$('#input_8_6').val($(this).val());
	});
		$('#email').on('keyup', function(){
		$('#input_8_2').val($(this).val());
	});
		$('#company').on('keyup', function(){
		$('#input_8_3').val($(this).val());
	});
		$('#phone').on('keyup', function(){
		$('#input_8_8').val($(this).val());
	});
	$('#message').on('keyup', function(){
		$('#input_8_5').val($(this).val());
	});
	
	$('#contact-form #contact-submit').on('click', function(){
		event.preventDefault();
		if($('#contact-form #email').val().length < 1 || $('#contact-form #name').val().length < 1 || $('#contact-form #message').val().length < 1 ){
			$('#contact-form #required-msg').fadeIn('fast');
		}else{
			$('#contact-form #required-msg').fadeOut('fast');
			$('#contact-form').slideUp('3000');
			$('.thank-you').show();
			$('#gform_submit_button_8').trigger('click');
		}
	});
	
	
});
