$(document).ready(function ()
{


    $('.block2__quiz').owlCarousel({
        mouseDrag: false,
        addClassActive: true,
        items: 1,
        autoWidth: false,
        autoHeight: true
    })



    $('.block2__quiz').on('changed.owl.carousel', function (e)
    {
        var i = e.item.index
        $('.block2__tabs .block2__tab').removeClass('block2__tab-active')
        $('.block2__tabs .block2__tab').removeClass('block2__tab-success')
        $('.block2__tabs .block2__tab').each(function (x)
        {
            if (i > x)
            {
                $(this).addClass('block2__tab-success')
            }
            else if (i == x)
            {
                $(this).addClass('block2__tab-active')
            }
        })
        document.querySelector('.block2__tabs-wrapper').scrollLeft = i * 125
    })

    $('.quiz__prev').click(function ()
    {
        if (!$(this).hasClass('disabled'))
        {
            $('.block2__quiz').trigger('prev.owl.carousel');
        }

        $([document.documentElement, document.body]).animate({
            scrollTop: $('.owl-stage').offset().top
        }, 1000)
    })
    $('.quiz__next').click(function ()
    {
        if (!$(this).hasClass('disabled'))
        {
            $('.block2__quiz').trigger('next.owl.carousel');

        }

        $([document.documentElement, document.body]).animate({
            scrollTop: $('.owl-stage').offset().top
        }, 1000)

    })

    $('.step1 .block2__answer').click(function ()
    {
        var a = $(this).children('input').attr('id')
        if (a == 'q1_1')
        {
            $('.step2 .side2').hide()
            $('.step2 .side3').hide()
        }
        else if (a == 'q1_2')
        {
            $('.step2 .side3').hide()
        }
        else
        {
            $('.step2 .quiz__input').show()
        }
    })


    $('.last-step, .step6 .block2__answer').click(function ()
    {
        $('.block2__tabs').hide()
    })

    $('.block7__tab').each(function (e)
    {
        $(this).attr('data-block7', e)
    })
    $('.block7__item').each(function (e)
    {
        $(this).attr('data-block7', e)
    })
    $('.block7__right .tab').each(function (e)
    {
        $(this).attr('data-block7', e)
    })
    $('.block7__tab').click(function ()
    {
        $('.block7__tab').removeClass('block7__tab-active')
        $(this).addClass('block7__tab-active')

        var e = $(this).data('block7')

        $('.block7__right .tab').removeClass('tab-active')
        $('.block7__right .tab[data-block7=' + e + ']').addClass('tab-active')

        $('.block7__item').removeClass('block7__item-active')
        $('.block7__item[data-block7=' + e + ']').addClass('block7__item-active')
    })
    $('.block7__right .tab').click(function ()
    {
        $('.block7__right .tab').removeClass('tab-active')
        $(this).addClass('tab-active')

        var e = $(this).data('block7')

        $('.block7__tab').removeClass('block7__tab-active')
        $('.block7__tab[data-block7=' + e + ']').addClass('block7__tab-active')

        $('.block7__item').removeClass('block7__item-active')
        $('.block7__item[data-block7=' + e + ']').addClass('block7__item-active')
    })


    $('.block9__slider').owlCarousel({
        mouseDrag: false,
        addClassActive: true,
        items: 1,
        autoWidth: false,
        nav: true,
        navText: ["", ""],
    })


    //masks

    $('input[name=name], input[name=name2], input[name=name3]').on('keyup keypress', function (e)
    {
        if (e.keyCode == 8 || e.keyCode == 46)
        {
        }
        else
        {
            var letters = ' zxcvbnmasdfghjklqwertyuiopQWERTYUIOPLKJHGFDSAZXCVBNMйцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ';
            return (letters.indexOf(String.fromCharCode(e.which)) != -1);
        }
    });
    $("input[name=phone]").mask("+7 (999) 999-9999");

    $('.mobile-menu__button .menu__button-1').click(function ()
    {
        $('nav').addClass('nav-open')
    })
    $('.mobile-menu__close').click(function ()
    {
        $('nav').removeClass('nav-open')
    })


    $('.contacts-btn').click(function (e)
    {
        e.preventDefault()
        $('nav').removeClass('nav-open')
        slide_down($('.block14'))
    })


    function slide_down(select)
    {
        var destination = select.offset().top;
        $('html, body').animate({scrollTop: destination}, 500);
        return false;
    }


    $('.callback-btn').click(function ()
    {
        document.body.style.overflow = 'hidden';
        $('.layer').fadeIn(300)
        $('.callback-popup').fadeIn(500)
    })

    $('.quiz-start').click(function ()
    {
        document.body.style.overflow = 'hidden';
        $('.layer').fadeIn(300)
        $('.quiz-popup').fadeIn(500)
    })

    $('.layer').click(function (e)
    {
        if ($(this).has(e.target).length === 0)
        {
            document.body.style.overflow = 'scroll';
            $('.layer').fadeOut(300)
            $('.popup').fadeOut(300)
        }
    })
    $('.close-popup').click(function ()
    {
        document.body.style.overflow = 'scroll';
        $('.layer').fadeOut(300)
        $('.popup').fadeOut(300)
    })

    $('.case-popup').each(function (e)
    {
        if (!$(this).is('.furn'))
        {
            $(this).attr('data-case', e)
        }
    })


     $("#price_calculation").submit(function ()
     {
        var type = $(this).children('input[name=type]').val();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            contentType: false,
            processData: false,
            url: "priceCalculator",
            data: formData,
        }).done(function ()
        {
                //надсилає но що при успіху робити я незнаю
        });
        return false;
    });
    
    //ajax form
    // $("form").submit(function ()
    // {
    //     var type = $(this).children('input[name=type]').val();
    //     var formData = new FormData(this);
    //     console.log(formData);
    //     $.ajax({
    //         type: "POST",
    //         contentType: false,
    //         processData: false,
    //         url: "/send",
    //         data: formData,
    //     }).done(function ()
    //     {
    //         if (type == 'Квиз')
    //         {
    //             $('.block2__quiz').trigger('next.owl.carousel');
    //         }
    //         else if (type == 'Скачивание каталога')
    //         {
    //             window.open("http://axis-portfolio.ru/logo.png");
    //         }
    //         else
    //         {
    //             $('.layer').fadeIn(300)
    //             $('.popup').fadeOut(200)
    //             $('.thank-popup').fadeIn(300)
    //         }
    //     });
    //     return false;
    // });

    
    //ajax form -- END

    if (isMobile())
    {
        console.log('mobile = true');
        $('.mobitel').each(function ()
        {
            var $wrp = $(this);
            var tel = $wrp.data('tel');
            if (tel)
            {
                $wrp.wrap('<a href="tel:' + tel + '"></a>');
            }
        })
    }


});


window.isMobile = function ()
{
    let check = false;
    (function (a)
    {
        if (/(midp|samsung|iphone|ipad|android|nokia|j2me|avant|docomo|novarra|palmos|palmsource|opwv|chtml|pda|mmp|blackberry|mib|mobile)/i.test(a))
        {
            check = true;
        }
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};



function fullWidthFinal(selector_container, selector_block) {
    var selector_container = selector_container;
    var selector_block = selector_block;
    if ($(selector_container).length && $(selector_block).length) {
        fullWidth(selector_container, selector_block);
        $(window).on('resize', function() {
            fullWidth(selector_container, selector_block);
        });
        $(document).ready(function() {
            fullWidth(selector_container, selector_block);
        });
    }
}
function fullWidth(selector_container, selector_block) {
    var selector_container = selector_container;
    var class_block = selector_block;
    if ($(selector_container).length && $(selector_block).length) {
        var width = document.documentElement.clientWidth;
        var containerWidth = $(selector_container).width();
        var margin = -(width - containerWidth)/2;
        $(class_block).css({'margin-left':+margin+'px','margin-right':+margin+'px'});
    }
}

function fullWidthFinalAbsolute(selector_container, selector_block) {
    var selector_container = selector_container;
    var selector_block = selector_block;
    if ($(selector_container).length && $(selector_block).length) {
        fullWidthAbsolute(selector_container, selector_block);
        $(window).on('resize', function() {
            fullWidthAbsolute(selector_container, selector_block);
        });
        $(document).ready(function() {
            fullWidthAbsolute(selector_container, selector_block);
        });
    }
}
function fullWidthAbsolute(selector_container, selector_block) {
    var selector_container = selector_container;
    var class_block = selector_block;
    if ($(selector_container).length && $(selector_block).length) {
        var width = document.documentElement.clientWidth;
        var containerWidth = $(selector_container).width();
        var margin = -(width - containerWidth)/2;

        $(class_block).css({'left':+margin+'px','width':+width+'px'});
    }
}