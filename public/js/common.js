$(function() {
	$('.cart').click(function(){
		$('.cart__popup').fadeIn();
		$(this).addClass('active');
	});
	$('.cart__popup-close').click(function(){
		$('.cart__popup').fadeOut();
		$('.cart').removeClass('active');
	})
});

