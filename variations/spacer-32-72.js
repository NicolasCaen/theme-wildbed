wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-32-72',
            title: 'Spacer 2rem (32px) → 4.5rem (72px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|32-72","metadata":{"name":"Espacement clamp(2rem, 0.6111rem + 4.4444vw, 4.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-72"},"className":"is-style-spacer-32-72"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|32-72","metadata":{"name":"Espacement clamp(2rem, 0.6111rem + 4.4444vw, 4.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-72"},"className":"is-style-spacer-32-72"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
