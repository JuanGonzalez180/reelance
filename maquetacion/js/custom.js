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
    pagination: {
        el: '.swiper-func-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">Etapa: <b>' + (index + 1) + '</b></span>';
        },
    },
});