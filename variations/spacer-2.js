wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-2',
            title: 'Spacer 1',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|2","metadata":{"name":"Espacement 1 | 16px","categories":["layout"],"patternName":"ng1-base/spacer-2"},"className":"is-style-spacer-2"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|2","metadata":{"name":"Espacement 1 | 16px","categories":["layout"],"patternName":"ng1-base/spacer-2"},"className":"is-style-spacer-2"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
