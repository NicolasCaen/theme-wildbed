wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-1',
            title: 'Spacer .5',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|1","metadata":{"name":"Espacement .5 | 8px","categories":["layout"],"patternName":"ng1-base/spacer-1"},"className":"is-style-spacer-1"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|1","metadata":{"name":"Espacement .5 | 8px","categories":["layout"],"patternName":"ng1-base/spacer-1"},"className":"is-style-spacer-1"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
