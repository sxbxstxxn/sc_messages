<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SebastianChristoph.sc_messages',
            'sendmessage',
            [
                'Messages' => 'sendmessage'
            ],
            // non-cacheable actions
            [
                
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SebastianChristoph.sc_messages',
            'messagelist',
            [
                'Messages' => 'messagelist'
            ],
            // non-cacheable actions
            [

            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SebastianChristoph.sc_messages',
            'messagedetail',
            [
                'Messages' => 'messagedetail'
            ],
            // non-cacheable actions
            [

            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    sendmessage {
                        iconIdentifier = sc_messages-plugin-sendmessage
                        title = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_sendmessage.name
                        description = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_sendmessage.description
                        tt_content_defValues {
                            CType = list
                            list_type = scmessages_sendmessage
                        }
                    }
                    messagelist {
                        iconIdentifier = sc_messages-plugin-messagelist
                        title = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messagelist.name
                        description = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messagelist.description
                        tt_content_defValues {
                            CType = list
                            list_type = scmessages_messagelist
                        }
                    }
                    messagedetail {
                        iconIdentifier = sc_messages-plugin-messagedetail
                        title = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messagedetail.name
                        description = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messagedetail.description
                        tt_content_defValues {
                            CType = list
                            list_type = scmessages_messagedetail
                        }
                    }
                }
                show = *
            }
       }'
    );


        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'sc_messages-plugin-sendmessage',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg']
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'sc_messages-plugin-messagelist',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg']
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'sc_messages-plugin-messagedetail',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg']
        );
    }
);
