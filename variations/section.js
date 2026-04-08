wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/group',
        {
            name: 'Section',
            title: 'Section',
            description: 'Section full width',
            keywords: ["up","ng1","pixelea","Section","group"],
            icon: wp.element.createElement('span', { dangerouslySetInnerHTML: { __html: "<svg stroke-linejoin=\"round\"  stroke-linecap=\"round\"  viewBox=\"0 0 24 24\"  fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">\n    <path d=\"M5 3H3v2h2V3zm4 0H7v2h2V3zM7 19h2v2H7v-2zM5 7H3v2h2V7zm14 0h2v2h-2V7zM5 11H3v2h2v-2zm14 0h2v2h-2v-2zM5 15H3v2h2v-2zm14 0h2v2h-2v-2zM5 19H3v2h2v-2zm6-16h2v2h-2V3zm2 16h-2v2h2v-2zm2-16h2v2h-2V3zm2 16h-2v2h2v-2zm2-16h2v2h-2V3zm2 16h-2v2h2v-2z\" fill=\"currentColor\" />\n</svg>" } }),
            category: 'layout',
            attributes: {
    "metadata": {
        "name": "Section"
    },
    "align": "full",
    "className": "section-full",
    "layout": {
        "type": "constrained"
    }
},
            innerBlocks: [
    [
        "core/group",
        {
            "metadata": {
                "name": "Section | Wrapper"
            },
            "className": "section__wrapper",
            "layout": {
                "type": "constrained"
            }
        },
        [
            [
                "core/paragraph",
                []
            ]
        ]
    ]
],
            example: { attributes: {
    "metadata": {
        "name": "Section"
    },
    "align": "full",
    "className": "section-full",
    "layout": {
        "type": "constrained"
    }
}, innerBlocks: [
    {
        "name": "core/group",
        "attributes": {
            "metadata": {
                "name": "Section | Wrapper"
            },
            "className": "section__wrapper",
            "layout": {
                "type": "constrained"
            }
        },
        "innerBlocks": [
            {
                "name": "core/paragraph",
                "attributes": {
                    "content": ""
                }
            }
        ]
    }
] },
            scope: ["block","inserter","transform"]
        }
    );
});