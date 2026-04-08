wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-32-48',
            title: 'Spacer 2rem (32px) → 3rem (48px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|32-48","metadata":{"name":"Espacement clamp(2rem, 1.4444rem + 1.7778vw, 3rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-48"},"className":"is-style-spacer-32-48"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|32-48","metadata":{"name":"Espacement clamp(2rem, 1.4444rem + 1.7778vw, 3rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-48"},"className":"is-style-spacer-32-48"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
