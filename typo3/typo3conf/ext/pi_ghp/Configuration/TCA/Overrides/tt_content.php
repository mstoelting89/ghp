<?php

// Adding SideHeaderContent Content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:pi_ghp/Resources/Private/Language/locallang.xlf:sideHeaderContent_title',
        'sideHeaderContent',
        'content-text',
    ],
    'textmedia',
    'after'
);

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:pi_ghp/Resources/Private/Language/locallang.xlf:contentelement_ghp_title',
        'contentelement_ghp',
        'content-text',
    ],
    'textmedia',
    'after'
);

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:pi_ghp/Resources/Private/Language/locallang.xlf:ghp_info_card_title',
        'ghp_info_card',
        'content-text',
    ],
    'textmedia',
    'after'
);

// Configure backend fields for sideHeaderContent Element
$GLOBALS['TCA']['tt_content']['types']['ghp_info_card'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            title; Eigener Titel,
            header; Titel;,
            header_position; Titelposition;,
            header_layout; Titelgröße;,
            image; Bild;,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'header' => [
            'exclude' => false,
            'label' => 'test',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ],
        ],
        'title' => [
            'config' => [
                'foreign_table' => 'tx_pighp_domain_model_guitarheartsproject',
                'foreign_field' => 'title',
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ]
        ],
        'header_layout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                        '0'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                        '1'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                        '2'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                        '3'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                        '4'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                        '5'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                        '100'
                    ]
                ],
                'default' => 0
            ],
        ],
        'header_position' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
            'exclude' => true,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                        ''
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                        'center'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                        'right'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                        'left'
                    ]
                ],
                'default' => ''
            ]
        ],
        'image' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                ],
                // custom configuration for displaying fields in the overlay/reference table
                // to use the imageoverlayPalette instead of the basicoverlayPalette
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                        ]
                    ],
                ],
            ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
        ],
    ],

];

// Configure backend fields for sideHeaderContent Element
$GLOBALS['TCA']['tt_content']['types']['sideHeaderContent'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            title; Eigener Titel,
            header; Titel;,
            header_position; Titelposition;,
            header_layout; Titelgröße;,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'header' => [
            'exclude' => false,
            'label' => 'test',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ],
        ],
        'title' => [
            'config' => [
                'foreign_table' => 'tx_pighp_domain_model_guitarheartsproject',
                'foreign_field' => 'title',
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ]
        ],
        'header_layout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                        '0'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                        '1'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                        '2'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                        '3'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                        '4'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                        '5'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                        '100'
                    ]
                ],
                'default' => 0
            ],
        ],
        'header_position' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
            'exclude' => true,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                        ''
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                        'center'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                        'right'
                    ],
                    [
                        'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                        'left'
                    ]
                ],
                'default' => ''
            ]
        ],
    ],

];

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['contentelement_ghp'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'name' => [
            'exclude' => false,
            'label' => 'test',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ],
        ],
        'title' => [
            'config' => [
                'foreign_table' => 'tx_pighp_domain_model_guitarheartsproject',
                'foreign_field' => 'title',
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 256
            ],
        ],
    ],
];
