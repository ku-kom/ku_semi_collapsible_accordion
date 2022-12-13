<?php

defined('TYPO3') or die('Access denied.');

// CType select
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:ku_semi_collapsible_accordion/Resources/Private/Language/locallang.xlf:content_element.semi_collapse_accordion',
        'semicollapsibleaccordion',
        'ku-semi-collapse-icon',
    ],
    'image',
    'after'
);
