wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-32-80',
            title: 'Spacer 2rem (32px) → 5rem (80px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|32-80","metadata":{"name":"Espacement clamp(2rem, 0.3333rem + 5.3333vw, 5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-80"},"className":"is-style-spacer-32-80"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|32-80","metadata":{"name":"Espacement clamp(2rem, 0.3333rem + 5.3333vw, 5rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-80"},"className":"is-style-spacer-32-80"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
