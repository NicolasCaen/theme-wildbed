wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-4',
            title: 'Spacer 0.25rem (4px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|4","metadata":{"name":"Espacement .25 | 4px","categories":["layout"],"patternName":"ng1-base/spacer-4"},"className":"is-style-spacer-4"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|4","metadata":{"name":"Espacement .25 | 4px","categories":["layout"],"patternName":"ng1-base/spacer-4"},"className":"is-style-spacer-4"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
