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

// Configure backend fields for sideHeaderContent Element
$GLOBALS['TCA']['tt_content']['types']['sideHeaderContent'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            title; Eigener Titel,
            header; Titel;,
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
        ]
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
                'eval' => 'trim,required',
                'max' => 256
            ],
        ],
    ],
];
