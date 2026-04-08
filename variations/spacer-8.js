wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-8',
            title: 'Spacer 0.5rem (8px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|8","metadata":{"name":"Espacement .5 | 8px","categories":["layout"],"patternName":"ng1-base/spacer-8"},"className":"is-style-spacer-8"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|8","metadata":{"name":"Espacement .5 | 8px","categories":["layout"],"patternName":"ng1-base/spacer-8"},"className":"is-style-spacer-8"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
