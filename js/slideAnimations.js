document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');

    function handleScroll() {
        animatedElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            console.log(`Element: ${element.className}, Top: ${rect.top}, Bottom: ${rect.bottom}`); // Debugging output
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                element.classList.add('active');
                console.log(`Element: ${element.className} - Active class added`); // Confirmation of activation
            }
        });
    }

    // Run on scroll and initial load
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Trigger on load in case elements are already in view
});
