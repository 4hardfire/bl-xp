/*
* This is the main JavaScript used by webpack to build the app.js file.
*/

document.addEventListener("DOMContentLoaded", function () {
    const scrollTopBtn = document.getElementById("scroll-top-btn");

    function toggleScrollButton() {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.remove("opacity-0", "invisible");
            scrollTopBtn.classList.add("opacity-100", "visible");
        } else {
            scrollTopBtn.classList.remove("opacity-100", "visible");
            scrollTopBtn.classList.add("opacity-0", "invisible");
        }
    }

    // Check scroll position when page loads
    toggleScrollButton();

    // Listen for scroll events
    window.addEventListener("scroll", toggleScrollButton);
});