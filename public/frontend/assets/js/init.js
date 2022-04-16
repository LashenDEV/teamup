(function ($) {
    function external_links() {
        $('a[rel*=external]').attr({'target': '_blank'})
    }

    $(document).ready(function () {
        $('#buttonDiv, #close-sign-up').click(function () {
            $('#hiddendDiv').toggle()
        });
        $('.gizNots').hover(function () {
            $('#menuNots').css('display', 'block');
            e.preventDefault();
            $.ajax({url: "/actions/clearNotifications.php", method: "POST"});
            $('#buttonDropNots').css({'background': '#289fcd', 'color': '#FFF'})
        }, function () {
            $('#menuNots').css('display', 'none');
            $('#buttonDropNots').css({'background': 'transparent', 'color': '#DDD'})
        });
        $('.giz').hover(function () {
            $('#menuDiv').css('display', 'block');
            $('#buttonDrop').css({'background': '#289fcd', 'color': '#FFF'})
        }, function () {
            $('#menuDiv').css('display', 'none');
            $('#buttonDrop').css({'background': 'transparent', 'color': '#DDD'})
        });
        external_links();
        $(".templates-list.carousel").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [768, 2],
            itemsMobile: [430, 1],
            lazyLoad: !0,
            navigation: !0,
            autoPlay: !1
        });
        $(document).on('click', '.closer', function (e) {
            e.preventDefault();
            $(this).parent().hide()
        });
        if ($(window).width() < 768) {
            $('#menu_mobile').mmenu();
            $('.mm-panel li').on('click', function () {
                $(this).addClass('act')
            });
            $('.top-menu').appendTo('.row-menu .col-sm-11')
        } else {
            $('ul.main-menu').superfish();
            $('.new-templates-list .image-item').mouseenter(function () {
                $(this).find('.popup').show()
            }).mouseleave(function () {
                $(this).find('.popup').hide()
            })
        }
        $('#search-form select').SumoSelect()
    });
    $(window).load(function () {
        $('body').addClass('loaded')
    });
    $('#LoginFormA').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/actions/login.php",
            method: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.isok == 0) {
                    $('.errorb').css('display', 'block').html(data.msg)
                } else if (data.isok == 1) {
                    $('.errorb').css('display', 'none');
                    window.location.href = "/settings.php"
                }
            }
        })
    });
    $('#newsletter').submit(function (e) {
        e.preventDefault();
        $.ajax({
            data: $(this).serialize(),
            method: "POST",
            dataType: "JSON",
            url: "/actions/subscribe.php",
            success: function (d) {
                if (d.isok == 1) {
                    $('.errorsub').css('display', 'none');
                    $('.successsub').css('display', 'block').html(d.msg)
                } else {
                    $('.successsub').css('display', 'none');
                    $('.errorsub').css('display', 'block').html(d.msg)
                }
            }
        })
    });
    $('.logout').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            url: "/actions/logout.php", method: "POST", data: {"doLogout": "YES"}, success: function () {
                window.location.href = "/sign-in/"
            }
        })
    });
    $('.close-unlimited').click(function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });
})(jQuery)
