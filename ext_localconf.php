<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keylistandshowcontact',
            [
                'Contact' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Contact' => 'list'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keylistandshoworganisme',
            [
                'Organisme' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Organisme' => 'list'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keysearchcontact',
            [
                'Contact' => 'search'
            ],
            // non-cacheable actions
            [
                'Organisme' => '',
                'Contact' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					keylistandshowcontact {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_keylistandshowcontact.svg
						title = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keylistandshowcontact
						description = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keylistandshowcontact.description
						tt_content_defValues {
							CType = list
							list_type = annuairematthiasrodier_keylistandshowcontact
						}
					}
					keylistandshoworganisme {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_keylistandshoworganisme.svg
						title = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keylistandshoworganisme
						description = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keylistandshoworganisme.description
						tt_content_defValues {
							CType = list
							list_type = annuairematthiasrodier_keylistandshoworganisme
						}
					}
					keysearchcontact {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_keysearchcontact.svg
						title = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keysearchcontact
						description = LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuaire_matthias_rodier_domain_model_keysearchcontact.description
						tt_content_defValues {
							CType = list
							list_type = annuairematthiasrodier_keysearchcontact
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
