<?php 

    $main_view = [

        'status' => 200,

        'result' => [
            'components' => [
                'file_01' => [
                    'component' => [
                        'name' => 'MainView',
                        'path' => 'src/main_view_routes/MainView.php',
                        /*'code' => [
                            '<?php',
                            'class MainView {',
                                'public function getMainView ($mv,$options) {',
                                    'if ($options) {',
                                        'echo json_encode ($mv,http_response_code($mv[\'status\']));',
                                    '} else {',
                                        'return $mv;',
                                    '}',
                                '}',
                            '}',
                            #'how_to_execute_method' => [
                                '$obj = new MainView;',
                                '$obj -> getMainView ($main_view,true);',
                                '?>'
                            #]
                        ]*/
                    ]
                ],
                'file_02' => [
                    'component' => [
                        'name' => 'MainViewController',
                        'path' => 'src/url_reader_controller/MainViewController.php',
                        /*'code' => [
                            '<?php',
                            'class MainViewController {',
                                'public function getIndex () {',
                                    'include \'src/main_view_routes/MainView.php\';',
                                '}',
                            '}',
                            '?>'
                        ]*/
                    ]
                ],
                'file_03' => [
                    'component' => [
                        'name' => 'index',
                        'path' => 'index.php',
                        /*'code' => [
                            '<?php',
                            'require_once \'./src/url_reader_controller/MainViewController.php\';',
                            'getIndex ();',
                            '?>'
                        ]*/
                    ]
                ]
            ]
        ]

    ];

    function getMainView ($mv,$options) {

        if ($options) {

            echo json_encode ($mv,http_response_code($mv['status']));

        } else {

            return $mv;

        }

    }

    /**
     * Objetos , version orientada a objetos
     */

    class MainView {

        public function getMainView ($mv,$options) {

            if ($options) {

                echo json_encode ($mv,http_response_code($mv['status']));

            } else {

                return $mv;

            }

        }

    }

    if ($use === 1) {

        $obj = new MainView;
        $obj -> getMainView ($main_view,true);

    } else {

        #run || execute the function
        getMainView ($main_view,true);

    }

?>