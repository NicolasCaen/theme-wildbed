wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/spacer',
        {
            name: 'spacer-56-160',
            title: 'Spacer 3.5rem (56px) → 10rem (160px)',
            description: '',
            keywords: ["up","ng1","pixelea","spacer"],
            icon: "minus",
            category: 'design',
            attributes: {"height":"var:preset|spacing|56-160","metadata":{"name":"Espacement clamp(3.5rem, -0.1111rem + 11.5556vw, 10rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-160"},"className":"is-style-spacer-56-160"},
            innerBlocks: [],
            example: { attributes: {"height":"var:preset|spacing|56-160","metadata":{"name":"Espacement clamp(3.5rem, -0.1111rem + 11.5556vw, 10rem)","categories":["layout"],"patternName":"ng1-base/spacer-56-160"},"className":"is-style-spacer-56-160"}, innerBlocks: [] },
            scope: ["block","inserter","transform"]
        }
    );
});
