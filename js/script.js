nhatnhat = {
	
	

}

$(document).ready(function () {
	
	$('.media-nav h1').click(function() {
		$('ol').addClass('inactive');
		$('.media-nav h1').removeClass('active');
		$(this).siblings('ol').removeClass('inactive');
		$(this).addClass('active');

		return false;
	});
$('.fullscreen-image').click(function() {
	return false

});

	$('.media-nav li').click(function() {
		var target, test;

		target = $(this).children('.hidden-content');
		test = target[0].innerHTML;
		$('.viewing').html(test);

		return false;
	});
	
	
	$('.post .title').click(function() {
		$(this).parents('.post').toggleClass('open');
		return false;
	});

});
