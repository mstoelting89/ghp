<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Me.Teme',
            'Testkey',
            'TextExti'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('teme', 'Configuration/TypoScript', 'TestExtention');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teme_domain_model_textex', 'EXT:teme/Resources/Private/Language/locallang_csh_tx_teme_domain_model_textex.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teme_domain_model_textex');

    }
);
