wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-56-120',
            title: 'Spacer 3.5rem (56px) → 7.5rem (120px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|56-120","metadata":{"name":"Espacement clamp(3.5rem, 1.2778rem + 7.1111vw, 7.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-120"},"className":"is-style-spacer-56-120"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|56-120","metadata":{"name":"Espacement clamp(3.5rem, 1.2778rem + 7.1111vw, 7.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-120"},"className":"is-style-spacer-56-120"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
