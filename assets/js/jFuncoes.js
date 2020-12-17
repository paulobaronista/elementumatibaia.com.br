$(document).ready(function () {
	$('#modalVideo').on('hidden.bs.modal', function () {
		$('video').trigger('pause');
	});
});

$(document).ready(function () {
	$('#cookies').show();
	$('body').css('overflow', 'hidden');
	if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		$('body').css('overflow', 'auto');
		return false;
	}
	$(".btn_cookie").click(function () {
		window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		$('body').css('overflow', 'auto');
		return false;
	});
});

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
	var colors = ["#f26722", "#abe0da", "#009db4", "#00582c", "#9a6326"],
		i = 0;
	setInterval(function () {
		$("meta[name='theme-color']").attr('content', colors[i]);
		i++;
		if (i >= colors.length) {
			i = 0;
		}
	}, 5700);
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
	$('.checkboxEmail').clear();
	$('.checkboxWhatsApp').clear();
	$('.checkboxTelefone').clear();
	$('.checkboxPolitica').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, c, s, t, ce, cw, ct, cp, m;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		c = $('.cidade').val();
		s = $('.estado').val();
		t = $('.phone').val();
		ce = $('.checkboxEmail').val();
		cw = $('.checkboxWhatsApp').val();
		ct = $('.checkboxTelefone').val();
		cp = $('.checkboxPolitica').val();
		m = $('.msg').val();
	});
});
