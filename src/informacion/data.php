<?php

$data = json_encode ([
    'welcome to' => 'my api portafolio',
    'modules' => [
        [
            'class name' => 'Filtro',
            'methods' => [
                [
                    'name' => 'getPreFix ();'
                ],
                [
                    'name' => '__construct ();'
                ]
            ]
        ],
        [
            'class name' => 'Informacion',
            'methods' => [
                [
                    'name' => '__construct ();'
                ],
                [
                    'name' => 'url_reader ();'
                ],
                [
                    'name' => 'end_points_two_parameters ($key_word);'
                ],
                [
                    'name' => 'end_points_three_parameters ($key_word);'
                ]
            ]
        ]
    ],
    'endpoints' => [
        'http://mi.project',
        'http://mi.project/hash/1-9/create',
    ]
]);

?>