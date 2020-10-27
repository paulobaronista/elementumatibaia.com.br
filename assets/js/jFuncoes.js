$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.cidade').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, c, t, m;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		c = $('.cidade').val();
		t = $('.phone').val();
		m = $('.msg').val();
	});
});
