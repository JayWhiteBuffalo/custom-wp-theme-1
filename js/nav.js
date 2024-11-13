document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const scrollThreshold = 100; // Adjust scroll threshold as needed

    function checkScroll() {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    // Listen for scroll events and trigger the function
    window.addEventListener('scroll', checkScroll);
});
