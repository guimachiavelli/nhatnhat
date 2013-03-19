nhatnhat = {
		
	

};

String.prototype.setCharAt = function(index,chr) {
	if(index > this.length-1) return str;
	return this.substr(0,index) + chr + this.substr(index+1);
}

current_image = '';

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
		current_image = $(this).attr('class').split(' ');
		current_image = '.' + current_image[0];

		test = target[0].innerHTML;
		target.parents('.media').children('.viewing').html(test);

		return false;
	});
	

	$('.viewing').click(function() {
		var li_target, target, test, new_image;
		
		new_image = current_image.setCharAt(current_image.length-1, parseInt(current_image[current_image.length-1])+1);
		
		li_target = $(this).siblings('.media-nav').children('.images').children('ol').children(new_image);
		target = li_target.children('.hidden-content');

		if (target.length > 0) {
			test = target[0].innerHTML;
			$(this).html(test);
			current_image = new_image;
		}
	});
	
	$('.post .title').click(function() {
		$(this).parents('.post').toggleClass('open');
		return false;
	});

});
