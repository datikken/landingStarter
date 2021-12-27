require('./form');

document.addEventListener('DOMContentLoaded', function() {
    const popupWhatsappClass = ".popup-whatsapp";
    gsap.from(popupWhatsappClass, {
        opacity: 0,
        x: 300,
        duration: .6,
        rotation: '-=360',
        scale: 10,
        right: '-200px'
    });
    const swiper1 = new Swiper('.swiper1', {
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination1',
            clickable: true,
        },
        autoplay: {
            delay: 2000,
        }
    });
});
