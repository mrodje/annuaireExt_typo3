<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keylistandshowcontact',
            'mrodier_listAndShowContact'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_keylistandshowcontact';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_keylistandshowcontact.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keysearchcontact',
            'mrodier_searchContact'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_keysearchcontact';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_keysearchcontact.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MatthiasRodier.AnnuaireMatthiasRodier',
            'Keylistandshoworganisme',
            'mrodier_listAndShowOrganisme'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_keylistandshoworganisme';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_keylistandshoworganisme.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Annuaire MRodier');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairematthiasrodier_domain_model_organisme', 'EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_csh_tx_annuairematthiasrodier_domain_model_organisme.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairematthiasrodier_domain_model_organisme');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairematthiasrodier_domain_model_fonction', 'EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_csh_tx_annuairematthiasrodier_domain_model_fonction.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairematthiasrodier_domain_model_fonction');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairematthiasrodier_domain_model_service', 'EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_csh_tx_annuairematthiasrodier_domain_model_service.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairematthiasrodier_domain_model_service');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairematthiasrodier_domain_model_contact', 'EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_csh_tx_annuairematthiasrodier_domain_model_contact.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairematthiasrodier_domain_model_contact');

    },
    $_EXTKEY
);
