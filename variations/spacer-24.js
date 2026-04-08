wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-24',
            title: 'Spacer 1.5rem (24px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|24","metadata":{"name":"Espacement 1.5 | 24px","categories":["layout"],"patternName":"ng1-base/spacer-24"},"className":"is-style-spacer-24"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|24","metadata":{"name":"Espacement 1.5 | 24px","categories":["layout"],"patternName":"ng1-base/spacer-24"},"className":"is-style-spacer-24"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
