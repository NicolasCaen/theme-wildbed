wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-32',
            title: 'Spacer 2rem (32px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|32","metadata":{"name":"Espacement 2 | 32px","categories":["layout"],"patternName":"ng1-base/spacer-32"},"className":"is-style-spacer-32"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|32","metadata":{"name":"Espacement 2 | 32px","categories":["layout"],"patternName":"ng1-base/spacer-32"},"className":"is-style-spacer-32"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
