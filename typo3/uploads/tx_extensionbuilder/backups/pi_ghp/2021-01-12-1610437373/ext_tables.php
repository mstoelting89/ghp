<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Michael.PiGhp',
            'Pi',
            'GuitarHeartsProcjectPlugin'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pi_ghp', 'Configuration/TypoScript', 'ghp_plugin');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pighp_domain_model_guitarheartsproject', 'EXT:pi_ghp/Resources/Private/Language/locallang_csh_tx_pighp_domain_model_guitarheartsproject.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pighp_domain_model_guitarheartsproject');

    }
);
