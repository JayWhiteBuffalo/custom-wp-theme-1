document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.testimonial-slide');
    const totalSlides = slides.length;
    const intervalTime = 10000; // 10 seconds

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentIndex);
    }

    // Set up initial slide and auto-slide
    showSlide(currentIndex);
    const slideInterval = setInterval(nextSlide, intervalTime);

    // Controls for manual navigation
    document.querySelector('.next-slide').addEventListener('click', () => {
        clearInterval(slideInterval); // Pause auto-slide on manual click
        nextSlide();
    });

    document.querySelector('.prev-slide').addEventListener('click', () => {
        clearInterval(slideInterval); // Pause auto-slide on manual click
        prevSlide();
    });
});
