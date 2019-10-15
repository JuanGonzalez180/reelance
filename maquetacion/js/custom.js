mobiscroll.settings = {
    theme: 'ios',   // Specify theme like: theme: 'ios' or omit setting to use default
    lang: 'es'  // Specify language like: lang: 'pl' or omit setting to use default
};

var swiperBanner = new Swiper('.swiper-container-banner', {
    navigation: {
        nextEl: '.swiper-btn-ban-next',
        prevEl: '.swiper-btn-ban-prev',
    },
    pagination: {
        el: '.swiper-ban-pagination',
        clickable: true,
    },
});

var swiperTesti = new Swiper('.swiper-container-testi', {
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    }
});

var swiperProductos = new Swiper('.swiper-container-products', {
    slidesPerView: 4,
    spaceBetween: 30
});

var swiperPromo = new Swiper('.swiper-container-promociones', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-btn-promo-next',
        prevEl: '.swiper-btn-promo-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 1,
            spaceBetween: 40
        }
    }
});

var swiperFunc = new Swiper('.swiper-container-func', {
    slidesPerView: 4,
    pagination: {
        el: '.swiper-func-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">Etapa: <b>' + (index + 1) + '</b></span>';
        },
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 1,
            spaceBetween: 40
        }
    }
});

$( document ).ready(function() {
    $(document).on("click", ".buscarReelance", function(){
        $(".siteSearchOp").stop().animate({
            opacity:0
        },300,function(){
            $(this).css("display","none")
        })
        ,
        $("#siteHeaderSearch").stop().animate({
            opacity:1
        },300,function(){
            $(this).css("display","block")
        })

        window.setTimeout(function(){
            $(".search-input").focus();
        },500);
    });

    $(document).on("click", ".siteCloseSearch", function(){
        $("#siteHeaderSearch").stop().animate({
            opacity:0
        },300,function(){
            $(this).css("display","none")
        })
        ,
        $(".siteSearchOp").stop().animate({
            opacity:1
        },300,function(){
            $(this).css("display","")
        })
    })

    $(document).on("click", "#buscarPunto", function(){
        $(".text-map, .google-fondo").hide();
        // $(".cont-puntos").show();
    });

    $(document).on("click", ".ree-registrarse, .ree-iniciarsesion", function(){
        $("#nombres").closest(".mbsc-control-w").addClass("is-error");
        $("#pass").closest(".mbsc-control-w").addClass("is-error");

        if( !$("#email").closest(".mbsc-control-w").hasClass("is-error") ){
            $("#email").closest(".mbsc-control-w").addClass("is-error");
        }else{
            $("#email").closest(".mbsc-control-w").removeClass("is-error");
        }

        $(location).attr('href', 'mi-cuenta');
    });

    $(document).on("change", "#check-enviar-direccion", function(){
        if( $('#check-enviar-direccion').prop('checked') ) {
            $( '.mbsc-address-other' ).show();
        }else{
            $( '.mbsc-address-other' ).hide();
        }
    })

    $(document).on("change", "#check-crear-cuenta", function(){
        if( $('#check-crear-cuenta').prop('checked') ) {
            $( '.mbsc-account-new' ).show();
        }else{
            $( '.mbsc-account-new' ).hide();
        }
    })
    
    $(document).on("click", ".action-step1", function(){
        $( '.step1, .step2-form' ).show();
        $( '.step1-form, .step2' ).hide();
        $(".step-container-2").removeClass("step-inactive");
    });
    
    $(document).on("click", ".edit-step1", function(){
        $( '.step1' ).hide();
        $( '.step1-form' ).show();
        $(".step-container-2").addClass("step-inactive");
        $(".step-container-3").addClass("step-inactive");
    });

    $(document).on("click", ".action-step2", function(){
        $( '.step2, .step3-form' ).show();
        $( '.step2-form' ).hide();
        $(".step-container-3").removeClass("step-inactive");
    });

    $(document).on("click", ".edit-step2", function(){
        $( '.step2' ).hide();
        $( '.step2-form' ).show();
        $(".step-container-3").addClass("step-inactive");
    });

    var cbAllow = $('.md-allow'),
        stepperLuggage = $('.md-luggage');

    cbAllow.change(function () {
        stepperLuggage.prop('disabled', !this.checked);
    });
    
    
    let element = $(".blog-float");
    let current_top = $(document).scrollTop();
    let footer = $(".footer-luma");
    let topBoxInsc = 140;

    let element2 = $(".compra-float");
    let tienda = $(".tienda");
    let itemBeforeTienda = $(".item-after-tienda");

    let topMax = 90;

    function scrollFloat() {
        // Element 1
        if( element.length ){
            current_top = $(document).scrollTop();
            
            let sumTop = 0;
            if( $("#submenuReelTienda").hasClass('in') ){
                // sumTop = $("#submenuReelTienda").outerHeight();
            }

            if( ( current_top + element.outerHeight() + topBoxInsc + sumTop ) > $(".footer-luma").offset()['top'] ){
                element.css({
                    top: topBoxInsc - ( ( current_top + element.outerHeight() + topBoxInsc + sumTop ) - $(".footer-luma").offset()['top'] + 20 ) ,
                });
            }else{
                if(current_top > 70 ){
                    element.css({
                        top: 90,
                    });
                }else{
                    element.css({
                        top: topBoxInsc + sumTop - current_top,
                    });
                }
            }
        }

        // Element 2
        if( element2.length ){
            current_top = $(document).scrollTop();

            let elementHeight = element2.outerHeight();
            let tiendaHeight = tienda.outerHeight();

            if( ( current_top + elementHeight + topMax ) > itemBeforeTienda.offset()['top'] ){
                element2.css({
                    top: topMax - ( ( current_top + elementHeight + topMax + 70 ) - itemBeforeTienda.offset()['top'] + 20 ),
                });
            }else{
                if( current_top > tienda.offset()['top'] ){
                    element2.css({
                        position: 'fixed',
                        top: 90
                    });
                }else{
                    element2.css({
                        position: 'relative',
                        top: 0,
                    });
                }
            }
        }

    }

    if (element.length || element2.length ) {
        $( document ).on('scroll', scrollFloat );
        enquire.register('screen and (max-width: 767px)', {
            match: function() {
                $(document).off('scroll', scrollFloat);
            },
            unmatch: function() {
                $(document).on('scroll', scrollFloat);
            },
        });
    }

    $(document).on('click', ".openTienda", function(){
        setTimeout(() => {
            scrollFloat();
        }, 400);
    });

    function resizeCarrito(){
        if( $( window ).width() < 992 ){
            $(".tbl-cart-view").removeClass('tbl-detail');
            $("#submenuReelTienda").removeClass('in');
            
            $("#siteHeaderSearch").stop().animate({
                opacity:0
            },300,function(){
                $(this).css("display","none")
            })
            ,
            $(".siteSearchOp").stop().animate({
                opacity:1
            },300,function(){
                $(this).css("display","")
            })
        }else{
            $(".tbl-cart-view").addClass('tbl-detail');
            $("#navbarSupportedContent").removeClass('in');
        }
    }

    $( window ).resize(function() { resizeCarrito() });
    resizeCarrito();
});