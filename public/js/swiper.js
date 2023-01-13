window.addEventListener("DOMContentLoaded", () => {
    const infiniteSlider = new Swiper(".infinite-slider", {
        loop: true,
        loopedSlides: 5,
        slidesPerView: "auto",
        pagination: {
            el: '.swiper_pagination'
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
});
