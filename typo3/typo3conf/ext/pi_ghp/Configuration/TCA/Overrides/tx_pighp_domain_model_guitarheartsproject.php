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
