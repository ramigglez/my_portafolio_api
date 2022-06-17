<?php

    class Informacion {

        public function __construct () {

            echo json_encode ([
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
                            ]
                        ]
                    ]
                ]
            ]);

        }

        public function url_reader () {

            

        }

    }

?>