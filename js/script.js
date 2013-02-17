nhatnhat = {
	
	

}

$(document).ready(function () {
	
	$('.media-nav h1').click(function() {
		$('ol').addClass('inactive');
		$(this).siblings('ol').removeClass('inactive');
		return false;
	});


	$('.media-nav li').click(function() {
		var target;

		target = $(this).children('.hidden-content');

		test = target[0].innerHTML;

		$('.viewing').html(test);

		return false;
		
		
	});


});
