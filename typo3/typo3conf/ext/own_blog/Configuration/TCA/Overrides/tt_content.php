<?php

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:own_blog/Resources/Private/Language/locallang.xlf:examples_newcontentelement_title',
        'examples_newcontentelement',
        'content-text',
    ],
    'textmedia',
    'after'
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

// use same identifier as used in TSconfig for icon
$iconRegistry->registerIcon(
// use same identifier as used in TSconfig for icon
    'examples_newcontentelement',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    // font-awesome identifier ('external-link-square')
    ['name' => 'external-link-alt']
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

// use same identifier as used in TSconfig for icon
$iconRegistry->registerIcon(
// use same identifier as used in TSconfig for icon
    'examples_newcontentelement',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    // font-awesome identifier ('external-link-square')
    ['name' => 'external-link-alt']
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['examples_newcontentelement'] = [
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
    ],
];


