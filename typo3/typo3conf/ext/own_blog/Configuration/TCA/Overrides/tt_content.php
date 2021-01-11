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


