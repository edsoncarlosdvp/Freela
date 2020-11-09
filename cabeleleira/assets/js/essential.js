/* BUTTON TOGGLER MENU TOP */
$('.link').click(function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
    if ($(window).width() < 991) {
        $('.navbar-toggler').trigger('click');
        $('.navbar-toggler').show();
        $('.btn-close-menu').hide();
    }

    var sectionTo = $(this).attr('href');
    var sectionTo = sectionTo.replace('#', '');
    var navbarHeight = isMobile() ? 50 : parseInt($('nav.navbar').innerHeight()) - 1
    $('body').removeClass('open-menu');
    $('html, body').animate({
        scrollTop: $('#' + sectionTo).offset().top - navbarHeight
    }, 1500);
    return false;
});

$('.navbar-toggler').click(function () {
    $(this).hide();
    $('body').addClass('open-menu');
    $('.btn-close-menu').show();
});

$('.btn-close-menu').click(function () {
    $('.navbar-toggler').trigger('click');
    $('body').removeClass('open-menu');
    $('.navbar-toggler').delay(1000).show();
    $(this).hide();
});

/* EFEITO SCROLL SUAVE */
$(document).ready(function ($) {
    var navHeight = $('#menuTop').innerHeight()
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top - navHeight }, 1000);
    });
    $(".scroll2").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: 32 * 15 }, 1000);
    });
    $("#aTop").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 1000);
    })
});

/* POST FORM SWEETARLET */
$(function () {
    $("#form-contact").submit(function () {
        $.ajax({
            url: './send_mail.php',
            type: 'POST',
            data: $('#form-contact').serialize(),
            dataType: 'html',
            success: function (data) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Sua mensagem foi enviada com sucesso! Agradecemos o contato e retornaremos o mais breve possível.',
                    showConfirmButton: false,
                    timer: 3500
                })
            },
            error: function (xhr) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Sua mensagem não pôde ser enviada! Tente novamente agora ou mais tarde.',
                    showConfirmButton: false,
                    timer: 3500
                })
            }
        })
        this.reset()
        return false
    })
})