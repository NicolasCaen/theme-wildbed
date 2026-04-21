document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.wp-block-navigation__submenu-icon');
    const customSVG = `<svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none">
  <path d="M5.19604 9L10.3922 0H-0.000107288L5.19604 9Z" fill="#F9A01E"/>
</svg>`;
    
    toggleButtons.forEach(button => {
        const svg = button.querySelector('svg');
        if (svg) {
            svg.outerHTML = customSVG;
        }
    });
});