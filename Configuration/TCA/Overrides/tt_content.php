<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sc_messages',
    'sendmessage',
    'Sendmessage',
    'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sc_messages',
    'messagelist',
    'Messagelist',
    'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sc_messages',
    'messagedetail',
    'Messagedetail',
    'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg'
);

/**
 * Remove unused fields
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['scmessages_sendmessage'] = 'recursive,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['scmessages_messagelist'] = 'recursive,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['scmessages_messagedetail'] = 'recursive,pages';

/**
 * Add Flexform for userlist plugin
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['scmessages_sendmessage'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'scmessages_sendmessage',
    'FILE:EXT:sc_messages/Configuration/FlexForm/sendmessage.xml'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['scmessages_messagelist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'scmessages_messagelist',
    'FILE:EXT:sc_messages/Configuration/FlexForm/messagelist.xml'
);