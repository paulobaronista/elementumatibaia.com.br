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

$(document).on('ready', function () {
	$(".galeria-lazer-elementum").slick({
		draggable: false,
		arrows: true,
		dots: false,
		infinite: true,
	});
});

$(document).on('ready', function () {
	$(".galeria-depoimento-elementum").slick({
		draggable: false,
		arrows: false,
		dots: true,
		infinite: true,
		speed: 800,
	});
});

$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "https://www.elementumatibaia.com.br"
	});
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 150 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
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
