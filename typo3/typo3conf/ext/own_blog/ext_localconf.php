<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Pi.OwnBlog',
            'Pi',
            [
                'Blog' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Blog' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:own_blog/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">',
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi {
                            iconIdentifier = own_blog-plugin-pi
                            title = LLL:EXT:own_blog/Resources/Private/Language/locallang_db.xlf:tx_own_blog_pi.name
                            description = LLL:EXT:own_blog/Resources/Private/Language/locallang_db.xlf:tx_own_blog_pi.description
                            tt_content_defValues {
                                CType = list
                                list_type = ownblog_pi
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'own_blog-plugin-pi',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:own_blog/Resources/Public/Icons/user_plugin_pi.svg']
			);

    }
);
