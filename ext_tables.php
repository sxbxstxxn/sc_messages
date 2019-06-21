<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SebastianChristoph.sc_messages',
            'messages',
            'Messages'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sc_messages', 'Configuration/TypoScript', 'SCMessages');

    }
);
