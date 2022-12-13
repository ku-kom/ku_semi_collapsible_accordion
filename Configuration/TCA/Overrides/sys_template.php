<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'ku_semi_collapsible_accordion';

    /**
     * Default TypoScript for KuImageWithOverlay
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'KU Semi collapsed Bootstrap accordion'
    );
});