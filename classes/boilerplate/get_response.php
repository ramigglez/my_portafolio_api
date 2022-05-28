<?php

$json = array(
    'status' => 200,
    'result' => 'ok',
    'where_am_i' => 'you_are_in_the_general_information_page',
    'entry_file' => 'index.php',
    'the_entry_file_require' => 'the_add_file',
    'description_add_file' => 'the add.php file has 4 sections',
    'add_file_sections' => [
        'section_01' => [
            'sectionName' => 'the_errors_section',
            'description' => 'this_section_has_the_code_that_help_us_to_debbug_errors_in_the_code'
        ],
        'section_02' => [
            'sectionName' => 'the_constantes',
            'description' => 'in_this_section_two_constants_are_defined_and_setting_up_with_a_value_each'
        ],
        'section_03' => [
            'sectionName' => 'the_main_classes_and_functions_file_also_the_Bp_interface',
            'description' => 'this_section_require_the_main_file_that_has_the_core_classes_and_functions_that_this_api_needs_to_run',
            'core' => [
                'fileName' => 'Boilerplate.php',
                'absolute_path' => 'http://mi.project/portafolio/classes/boilerplate',
                'relative_path' => './classes/boilerplate',
                'boilerplate_sections' => [
                    'section_01' => [
                        'sectionName' => 'the_Boilerplate_class',
                        'description' => 'the_Boilerplate_class_is_the_first_main_class_of_the_hole_project_rest_of_files_are_part_of_the_Boilerplate_class',
                        'note' => 'the_Boilerplate_class_implements_the_jsonResp_interface',
                        'empty_Boilerplate_class_code' => [
                            'line_1' => 'class Boilerplate implements jsonResp {',
                            'line_2' => 'METHODS',
                            'line_3' => '}'
                        ],
                        'interface_code' => [
                            'line_1' => 'interface jsonResp {',
                            'line_2' => 'public function response (null|string|array|int|float|bool $x = \'info\');',
                            'line_3' => '}'
                        ],
                        'methods' => [
                            'item_01' => [
                                'nameProto' => 'validar_hash ($info_json,$output = 1)',
                                'description' => 'Este metodo se encarga de retornar la informacion actualizada del bloque con un hash valido.',
                                'seudocodigo' => '
                                1- declarar la variable $path = [];
                                2- declarar la variable $nonce = 0;
                                3- actializar nonce en el json del bloque (la clase)
                                4- hacer 
                                    4.1- convertir array a json
                                    4.2- obtener el hash de la informacion en el json generado
                                    4.3- agregar el hash ala variable path
                                    4.4- obtener el substring del hash resultante
                                    4.5- incrementar nonce en 1 unidad
                                    4.6- actualizar nonce en el arreglo de la informacion de la clase
                                mientras el substring sea diferente a la cantidad de ceros requeridos
                                5- agregar el hash valido a la variable hash
                                6- si output es igual a 0 entonces
                                    6.1- retornar el hash
                                6.1- sino si output es igual a -1 entonces
                                    6.1.1- retornar todos los hashes calculados antes de encontrar el hash valido
                                6.2- sino
                                    6.2.1- retornar arreglo de informacion de la clase
                                ',
                                'code' => [
                                    'line_1' => 'private function validar_hash ($info_json,$output = 1) {',
                                    'line_2' => '$path = [];',
                                    'line_3' => '$nonce = 0;',
                                    'line_4' => '$info_json[\'nonce\'] = $nonce;',
                                    'line_5' => 'do {',
                                    'line_6' => '$a = json_encode($info_json);',
                                    'line_7' => '$hashTest = hash(\'sha256\',$a);',
                                    'line_8' => 'array_push($path,$hashTest);',
                                    'line_9' => '$aux = substr($hashTest,0,CEROS_INT);',
                                    'line_10' => '$nonce++;',
                                    'line_11' => '$info_json[\'nonce\'] = $nonce;',
                                    'line_12' => '} while ($aux !== CEROS_STR);',
                                    'line_13' => '$hash = $hashTest;',
                                    'line_14' => 'if ($output === 0) {',
                                    'line_15' => 'return $hash;',
                                    'line_16' => '} else if ($output === -1) {',
                                    'line_17' => 'array_pop($path);',
                                    'line_18' => 'return $path;',
                                    'line_19' => '} else {',
                                    'line_20' => 'return $info_json;',
                                    'line_21' => '}',
                                    'line_22' => '}'
                                ]
                            ],
                            'item_02' => [
                                'nameProto' => 'response(parametros)',
                                'description' => 'this_method_is_special_it_has_only_one_parameter_transformer',
                                'seudocodigo' => 'do_it_yourself',
                                'code' => [
                                    'line_1' => 'public function response (null|string|array|int|float|bool $x = \'info\') {',
                                    'line_2' => 'if ($x === \'info\') {',
                                    'line_3' => 'require_once \'./classes/boilerplate/class_information.php\';',
                                    'line_4' => '$a = json_encode($json);',
                                    'line_5' => '$previous_hash = hash(\'sha256\',$a);',
                                    'line_6' => 'require_once \'./classes/boilerplate/block_information.php\';',
                                    'line_7' => 'return json_encode($block,http_response_code($json[\'status\']));',
                                    'line_8' => '} else {',
                                    'line_9' => 'require_once \'./classes/boilerplate/get_response.php\';',
                                    'line_10' => 'return json_encode($json,http_response_code($json[\'status\']));',
                                    'line_11' => '}',
                                    'line_12' => '}'
                                ]
                            ],
                            'item_03' => [
                                'nameProto' => 'create_attrs(args);',
                                'description' => 'complete it by yourself',
                                'seudocodigo' => 'please',
                                'code' => [
                                    '!!!'
                                ]
                            ],
                            'item_04' => [
                                'nameProto' => 'create_content(args);',
                                'description' => 'complete it by yourself',
                                'seudocodigo' => 'please',
                                'code' => [
                                    '!!!'
                                ]
                            ],
                            'item_05' => [
                                'nameProto' => 'create_element(args);',
                                'description' => 'complete it by yourself',
                                'seudocodigo' => 'please',
                                'code' => [
                                    '!!!'
                                ]
                            ]
                        ]
                    ],
                    'section_02' => [
                        'sectionName' => 'the_Bp_class',
                        'description' => 'complete it by yourself',
                        'methods' => [
                            'item_01' => [
                                'nameProto' => 'complete it by yourself',
                                'description' => 'complete it by yourself',
                                'seudocodigo' => 'complete it by yourself',
                                'code' => []
                            ]
                        ]
                    ],
                    'section_03' => [
                        'sectionName' => 'the_functions',
                        'description' => 'complete it by yourself',
                        'functions' => [
                            'item_01' => [
                                'nameProto' => 'complete it by yourself',
                                'description' => 'complete it by yourself',
                                'seudocodigo' => 'complete it by yourself',
                                'code' => [
                                    'complete it by yourself'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'section_04' => [
            'sectionName' => 'the_menu',
            'description' => 'this_section_show_onscreen_in_json_format_the_endpoints_pages_and_execute_the_router'
        ]
    ]
);