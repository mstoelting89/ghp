<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('own_blog', 'Configuration/TypoScript', 'Blog');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ownblog_domain_model_blog', 'EXT:own_blog/Resources/Private/Language/locallang_csh_tx_ownblog_domain_model_blog.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ownblog_domain_model_blog');

    }
);
