<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_domain_model_message',
        'label' => 'name',
        'iconfile' => 'EXT:sc_messages/Resources/Public/Icons/user_plugin_messages.svg'
    ],
    'columns' => [
        'id' => [
            'label' => 'LLL:EXT:sc_messages/Resources/Private/Language/locallang_db.xlf:tx_sc_messages_domain_model_message.id',
            'config' => [
                'type' => 'input',
                'size' => '4',
                'eval' => 'int'
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'id'],
    ],
];