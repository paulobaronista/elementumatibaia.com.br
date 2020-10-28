$(document).on('ready', function () {
	$(".galeria-elementum").slick({
		draggable: false,
		arrows: false,
		dots: false,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: false,
	});
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "https://www.elementumatibaia.com.br"
    });
});

$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.cidade').clear();
	$('.estado').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, c, t, m, s;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		c = $('.cidade').val();
		s = $('.estado').val();
		t = $('.phone').val();
		m = $('.msg').val();
	});
});
