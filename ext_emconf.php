<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ru)',
    'description' => '(ru) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '13.4.0',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'static_info_tables' => '13.4.0-13.4.99',
            'php' => '8.2.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
