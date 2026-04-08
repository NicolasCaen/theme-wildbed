wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-9',
            title: 'Spacer 10',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|9","metadata":{"name":"Espacement 10 | 160px","categories":["layout"],"patternName":"ng1-base/spacer-9"},"className":"is-style-spacer-9"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|9","metadata":{"name":"Espacement 10 | 160px","categories":["layout"],"patternName":"ng1-base/spacer-9"},"className":"is-style-spacer-9"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
