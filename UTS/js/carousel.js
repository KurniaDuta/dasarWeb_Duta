$(document).ready(function() {
    const slideContainer = $('.carousel-slide');
    const slides = $('.carousel-slide img');
    const prevBtn = $('#prevBtn');
    const nextBtn = $('#nextBtn');
    
    let counter = 0;
    const totalSlides = slides.length;

    function updateCarousel(instant = false) {
        const size = slides[0].clientWidth;
        if (instant) {
            slideContainer.css('transition', 'none');
        } else {
            slideContainer.css('transition', 'transform 0.7s ease-in-out');
        }
        slideContainer.css('transform', 'translateX(' + (-size * counter) + 'px)');
    }

    nextBtn.click(function() {
        if (counter >= totalSlides - 1) {
            counter = 0;
            updateCarousel(true);
        } else {
            counter++;
            updateCarousel();
        }
    });

    prevBtn.click(function() {
        if (counter <= 0) {
            counter = totalSlides - 1;
            updateCarousel(true);
        } else {
            counter--;
            updateCarousel();
        }
    });

    setInterval(function() {
        nextBtn.click();
    }, 6000);
});
