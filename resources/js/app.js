require('./bootstrap');

document.addEventListener('DOMContentLoaded', function() {
    const popupWhatsappClass = ".popup-whatsapp";

    const R = (max, min) => {
        return Math.random()*(max-min)+min
    }

    gsap.from(popupWhatsappClass, {
        opacity: 0,
        x: 300,
        duration: .6,
        rotation: '-=360',
        scale: 10,
        right: '-200px'
    });
});
