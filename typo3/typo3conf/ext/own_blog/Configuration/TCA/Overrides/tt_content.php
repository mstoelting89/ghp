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


