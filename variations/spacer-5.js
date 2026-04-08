wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-5',
            title: 'Spacer 2.5',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|5","metadata":{"name":"Espacement 2.5 | 40px","categories":["layout"],"patternName":"ng1-base/spacer-5"},"className":"is-style-spacer-5"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|5","metadata":{"name":"Espacement 2.5 | 40px","categories":["layout"],"patternName":"ng1-base/spacer-5"},"className":"is-style-spacer-5"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
