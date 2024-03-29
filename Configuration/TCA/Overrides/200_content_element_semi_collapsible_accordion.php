<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Add Content Element
if (!is_array($GLOBALS['TCA']['tt_content']['types']['ku_semi_collapsible_accordion'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['ku_semi_collapsible_accordion'] = [];
}

// Add content element PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ku_semi_collapsible_accordion',
    'Configuration/TsConfig/Page/ku_semi_collapsible_accordion.tsconfig',
    'LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion'
);

// Add content element to selector list
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion',
        'ku_semi_collapsible_accordion',
        'ku-semi-collapse-icon',
        'ku_semi_collapsible_accordion'
    ]
);

// Assign Icon
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ku_semi_collapsible_accordion'] = 'ku-semi-collapse-icon';

// Configure element type
$GLOBALS['TCA']['tt_content']['types']['ku_semi_collapsible_accordion'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['ku_semi_collapsible_accordion'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_ku_semi_collapsible_accordion_item,
            --div--;LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion_options,
                pi_flexform;LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion_advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        '
    ]
);

// Register fields
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [
        'tx_ku_semi_collapsible_accordion_item' => [
            'label' => 'LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ku_semi_collapsible_accordion_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'newRecordLinkTitle' => 'LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.add-item',
                    'useSortable' => true,
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'expandSingle' => true,
                    'enabledControls' => [
                        'localize' => true,
                    ]
                ],
                'behaviour' => [
                    'mode' => 'select',
                ]
            ]
        ]
    ]
);

// Add flexForms for content element configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:ku_semi_collapsible_accordion/Configuration/FlexForms/SemiCollapsibleAccordion.xml',
    'ku_semi_collapsible_accordion'
);