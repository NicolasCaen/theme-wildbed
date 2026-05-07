(function() {
    // Get the current domain
    const currentDomain = window.location.hostname;

    // Find all links on the page
    const links = document.querySelectorAll('a[href]');

    links.forEach(link => {
        const href = link.getAttribute('href');

        // Check if the link is external
        if (href && (href.startsWith('http://') || href.startsWith('https://'))) {
            try {
                const linkHostname = new URL(href).hostname;

                // If the hostname is different from current domain, it's external
                if (linkHostname !== currentDomain) {
                    link.setAttribute('target', '_blank');
                    link.setAttribute('rel', 'noopener noreferrer');
                }
            } catch (e) {
                // Invalid URL, skip
            }
        }
    });
})();