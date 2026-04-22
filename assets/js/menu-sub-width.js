document.addEventListener('DOMContentLoaded', function() {
    const navigationItems = document.querySelectorAll('.wp-block-navigation>.wp-block-navigation-item');
    navigationItems.forEach(item => {
        const submenu = item;
        if (submenu) {
         
            const parentWidth = item.offsetWidth ;
            submenu.style.setProperty('--parent-width', parentWidth + 'px');
        }
    });
});
