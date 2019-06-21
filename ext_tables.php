<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SebastianChristoph.sc_messages',
            'sendmessage',
            'SendMessage'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SebastianChristoph.sc_messages',
            'messagelist',
            'Messagelist'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SebastianChristoph.sc_messages',
            'messagedetail',
            'MessageDetail'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sc_messages', 'Configuration/TypoScript', 'SCMessages');

    }
);
