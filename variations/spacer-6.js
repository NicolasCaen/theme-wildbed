wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-6',
            title: 'Spacer 3',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|6","metadata":{"name":"Espacement 3 | 48px","categories":["layout"],"patternName":"ng1-base/spacer-6"},"className":"is-style-spacer-6"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|6","metadata":{"name":"Espacement 3 | 48px","categories":["layout"],"patternName":"ng1-base/spacer-6"},"className":"is-style-spacer-6"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
