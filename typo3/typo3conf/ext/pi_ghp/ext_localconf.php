<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Michael.PiGhp',
            'Pi',
            [
                'GuitarHeartsProject' => 'list, show'
            ],
            // non-cacheable actions
            [
                'GuitarHeartsProject' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pi_ghp/Configuration/TsConfig/Page/Mod/Wizards/TestElement.tsconfig">'
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pi_ghp/Configuration/TsConfig/Page/Mod/Wizards/ghp_info_card.tsconfig">'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pi_ghp/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement_GHP.tsconfig">'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pi_ghp/Configuration/TsConfig/Page/Mod/Wizards/SideHeaderContent.tsconfig">'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi {
                            iconIdentifier = pi_ghp-plugin-pi
                            title = LLL:EXT:pi_ghp/Resources/Private/Language/locallang_db.xlf:tx_pi_ghp_pi.name
                            description = LLL:EXT:pi_ghp/Resources/Private/Language/locallang_db.xlf:tx_pi_ghp_pi.description
                            tt_content_defValues {
                                CType = list
                                list_type = pighp_pi
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'pi_ghp-plugin-pi',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:pi_ghp/Resources/Public/Icons/user_plugin_pi.svg']
			);


    }
);
