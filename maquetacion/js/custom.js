var swiperBanner = new Swiper('.swiper-container-banner', {
    navigation: {
        nextEl: '.swiper-btn-ban-next',
        prevEl: '.swiper-btn-ban-prev',
    },
    pagination: {
        el: '.swiper-ban-pagination',
    },
});

var swiperTesti = new Swiper('.swiper-container-testi', {
    slidesPerView: 4,
    spaceBetween: 30
});