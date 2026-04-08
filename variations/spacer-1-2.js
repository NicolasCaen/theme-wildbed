wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-1-2',
            title: 'Spacer .25',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|1-2","metadata":{"name":"Espacement .25 | 4px","categories":["layout"],"patternName":"ng1-base/spacer-1-2"},"className":"is-style-spacer-1-2"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|1-2","metadata":{"name":"Espacement .25 | 4px","categories":["layout"],"patternName":"ng1-base/spacer-1-2"},"className":"is-style-spacer-1-2"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
