<?php

ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
error_reporting(E_STRICT);

function f_getConfig() {
    return [
        'acp' => [
            'use' => '4',
        ],
        'sock' => [
            'use' => '1'
            ],
        'check' => [
            'use' => [1],
        ]
    ];
}
