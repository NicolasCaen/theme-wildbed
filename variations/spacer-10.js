wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-10',
            title: 'Spacer 12.5',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|10","metadata":{"name":"Espacement 12.5 | 200px","categories":["layout"],"patternName":"ng1-base/spacer-10"},"className":"is-style-spacer-10"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|10","metadata":{"name":"Espacement 12.5 | 200px","categories":["layout"],"patternName":"ng1-base/spacer-10"},"className":"is-style-spacer-10"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
