<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Me.Teme',
            'Testkey',
            [
                'TextEx' => 'list, show'
            ],
            // non-cacheable actions
            [
                'TextEx' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        testkey {
                            iconIdentifier = teme-plugin-testkey
                            title = LLL:EXT:teme/Resources/Private/Language/locallang_db.xlf:tx_teme_testkey.name
                            description = LLL:EXT:teme/Resources/Private/Language/locallang_db.xlf:tx_teme_testkey.description
                            tt_content_defValues {
                                CType = list
                                list_type = teme_testkey
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'teme-plugin-testkey',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:teme/Resources/Public/Icons/user_plugin_testkey.svg']
			);
		
    }
);
