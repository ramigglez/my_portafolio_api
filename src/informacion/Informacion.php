<?php

    class Informacion {

        public function __construct () {

            $this->url_reader ();

        }

        public function url_reader () {

            $key_word = explode('/',$_SERVER['REQUEST_URI']);
            $key_word = array_filter($key_word);

            if (count($key_word) >= 1) {

                if (count($key_word) == 1) {

                    #echo "hay 1 parametro";
                    switch ($key_word[1]) {

                        case 'hash': $this->end_points_two_parameters ($key_word); break;

                        default: echo json_encode ([
                            'status' => 400,
                            'result' => 'not found'
                        ],http_response_code(400));

                    }

                } else {

                    $this->end_points_two_parameters ($key_word);
                    
                }

            } else {

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

            }

        }

        public function end_points_two_parameters ($key_word) {

            #echo "hay mas de 1 parametros";
            switch ($key_word[1]) {

                case 'hash': 
                
                    require_once './src/filtro/Filtro.php';

                    $this->end_points_three_parameters ($key_word); 

                break;

                default: echo json_encode ([
                    'status' => 400,
                    'result' => 'not found'
                ],http_response_code(400));

            }

        }

        public function end_points_three_parameters ($key_word) {

            switch ($key_word[3]) {

                case 'create': 
                
                    $prefix = $this->build_prefix ($key_word,0);

                    $pf = json_decode($prefix);

                    echo json_encode ([
                        'prefix' => json_decode($prefix),
                        'hash' => $pf->{'prefix'}.'valid-hash-example'
                    ]);
                
                break;

                default: echo json_encode ([
                    'status' => 400,
                    'result' => 'not found'
                ],http_response_code(400));

            }

        }

        public function build_prefix ($key_word,$print = 1) {

            if (is_numeric($key_word[2])) {

                $obj = new Filtro ((int) $key_word[2]);

                if ($print == 1) {

                    echo $obj->getPreFix ();

                } else {

                    return $obj->getPreFix ();

                }

            } else {

                echo json_encode ([
                    'result' => 'second parameter has to be int'
                ]);

            }

        }

    }

?>