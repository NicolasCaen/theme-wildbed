wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-1-5',
            title: 'Spacer .75',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|1-5","metadata":{"name":"Espacement .75 | 12px","categories":["layout"],"patternName":"ng1-base/spacer-1-5"},"className":"is-style-spacer-1-5"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|1-5","metadata":{"name":"Espacement .75 | 12px","categories":["layout"],"patternName":"ng1-base/spacer-1-5"},"className":"is-style-spacer-1-5"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
