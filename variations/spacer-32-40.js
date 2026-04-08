wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-32-40',
            title: 'Spacer 2rem (32px) → 2.5rem (40px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|32-40","metadata":{"name":"Espacement clamp(2rem, 1.7222rem + 0.8889vw, 2.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-40"},"className":"is-style-spacer-32-40"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|32-40","metadata":{"name":"Espacement clamp(2rem, 1.7222rem + 0.8889vw, 2.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-40"},"className":"is-style-spacer-32-40"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
