wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-7',
            title: 'Spacer 4.5',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|7","metadata":{"name":"Espacement 4.5 | 72px","categories":["layout"],"patternName":"ng1-base/spacer-7"},"className":"is-style-spacer-7"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|7","metadata":{"name":"Espacement 4.5 | 72px","categories":["layout"],"patternName":"ng1-base/spacer-7"},"className":"is-style-spacer-7"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
