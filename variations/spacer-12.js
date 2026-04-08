wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-12',
            title: 'Spacer 0.75rem (12px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|12","metadata":{"name":"Espacement .75 | 12px","categories":["layout"],"patternName":"ng1-base/spacer-12"},"className":"is-style-spacer-12"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|12","metadata":{"name":"Espacement .75 | 12px","categories":["layout"],"patternName":"ng1-base/spacer-12"},"className":"is-style-spacer-12"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
