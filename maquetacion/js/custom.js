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
    spaceBetween: 30
});

var swiperPromo = new Swiper('.swiper-container-promociones', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-btn-promo-next',
        prevEl: '.swiper-btn-promo-prev',
    },
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
});

$( document ).ready(function() {

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

    $(document).on("click", ".cambiarFuente", function(){
        $("#font").val( $(this).attr("data-font") );
        $( "#target-font" ).submit();
    })

    $(document).on("click", ".cambiarColor", function(){
        $("#color").val( $(this).attr("data-color") );
        $( "#target-colores" ).submit();
    })

    $(document).on("click", ".cambiarBorder", function(){
        $("#border").val( $(this).attr("data-border") );
        $( "#target-border" ).submit();
    })
});

// Fixed.
(function($){
    var cbAllow = $('.md-allow'),
        stepperLuggage = $('.md-luggage');

    cbAllow.change(function () {
        stepperLuggage.prop('disabled', !this.checked);
    });
    
    $(function() {
        let element = $(".blog-float");
        let current_top = $(document).scrollTop();
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
                    if(current_top > 70){
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

                console.log( 'current_top2: ', current_top );
                console.log( 'tienda: ', itemBeforeTienda.offset()['top'] );

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
	        $(document).on('scroll', scrollFloat);
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

    });
})(jQuery);