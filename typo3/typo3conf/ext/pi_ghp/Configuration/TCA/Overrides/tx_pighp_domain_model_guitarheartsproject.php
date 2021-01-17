<?php
defined('TYPO3_MODE') or die();
$newField = array (
    'title' => [
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 256
        ]
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_pighp_domain_model_guitarheartsproject', $newField);

return [
    'ctrl' => [
        'title' => 'tttest',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField'  => 'l18n_diffsource',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'sys_language_uid',
        'useColumnsForDefaultValues' => 'sys_language_uid',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'status,name,address,telephone_number,telefax_number,url,email_address,description,contacts,offers,administrator'
    ],
    'types' => [
        '0' => ['showitem' => 'hidden,status,name,address;;1;;description,contacts,offers,administrator'],
    ],
   'palettes' => [
       '1' => ['showitem' => 'title'],
],
   'columns' => [
       'title' => [
           'exclude' => false,
           'label' => 'FooBar',
           'config' => [
               'type' => 'input',
               'size' => 20,
               'eval' => 'trim',
               'max' => 256
           ],
       ],
    ],
];


