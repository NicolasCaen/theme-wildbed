wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-16',
            title: 'Spacer 1rem (16px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|16","metadata":{"name":"Espacement 1 | 16px","categories":["layout"],"patternName":"ng1-base/spacer-16"},"className":"is-style-spacer-16"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|16","metadata":{"name":"Espacement 1 | 16px","categories":["layout"],"patternName":"ng1-base/spacer-16"},"className":"is-style-spacer-16"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
