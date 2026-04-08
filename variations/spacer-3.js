wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-3',
            title: 'Spacer 1.5',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|3","metadata":{"name":"Espacement 1.5 | 24px","categories":["layout"],"patternName":"ng1-base/spacer-3"},"className":"is-style-spacer-3"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|3","metadata":{"name":"Espacement 1.5 | 24px","categories":["layout"],"patternName":"ng1-base/spacer-3"},"className":"is-style-spacer-3"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
