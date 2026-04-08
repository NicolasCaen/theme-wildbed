wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-56-200',
            title: 'Spacer 3.5rem (56px) → 12.5rem (200px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|56-200","metadata":{"name":"Espacement clamp(3.5rem, -1.5rem + 16vw, 12.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-200"},"className":"is-style-spacer-56-200"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|56-200","metadata":{"name":"Espacement clamp(3.5rem, -1.5rem + 16vw, 12.5rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-200"},"className":"is-style-spacer-56-200"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
