<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SebastianChristoph.sc_messages',
            'messages',
            [
                'Messages' => 'messages'
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
                    messages {
                        iconIdentifier = sc_messages-plugin-messages
                        title = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messages.name
                        description = LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_messages.description
                        tt_content_defValues {
                            CType = list
                            list_type = scmessages_messages
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'sc_messages-plugin-messages',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg']
			);
		
    }
);
