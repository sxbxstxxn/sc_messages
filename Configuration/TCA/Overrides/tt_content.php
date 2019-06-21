<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sc_messages',
    'messages',
    'Messages',
    'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg'
);

/**
 * Remove unused fields
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['scmessages_messages'] = 'recursive,pages';

/**
 * Add Flexform for userlist plugin
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['scmessages_messages'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'scmessages_messages',
    'FILE:EXT:sc_messages/Configuration/FlexForm/messages.xml'
);