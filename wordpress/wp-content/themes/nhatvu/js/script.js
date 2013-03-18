nhatnhat = {
	
	

}

$(document).ready(function () {
	
	$('.media-nav h1').click(function() {
		$(this).parents('.media-module').addClass('active');
		$(this).parents('.media-module').siblings('.media-module').removeClass('active');
		return false;
	});

	$('.fullscreen-image').click(function() {
		return false
	});

	$('.media-nav li').click(function() {
		var target, test;
		
		$(this).addClass('active').siblings('li').removeClass('active');

		target = $(this).children('.hidden-content');
		test = target[0].innerHTML;
		target.parents('.media').children('.viewing').html(test);
		

		return false;
	});
	
	
	$('.post .title').click(function() {
		$(this).parents('.post').toggleClass('open');
		return false;
	});

});
