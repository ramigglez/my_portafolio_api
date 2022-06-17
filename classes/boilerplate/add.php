<?php

//Mostrar Errores (section_01)
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log','/var/www/mi.project/portafolio/php_error_log');

    //Ceros inicales para que un hash sea valido
    #si la cantidad de ceros int aumenta , el string debe de coincidir en longitud tambien (section_02)
    $ceros = 3;
    define('CEROS_INT',$ceros);
    define('CEROS_STR',str_repeat('0',CEROS_INT));
    //archivo principal (section_03)


require_once './classes/boilerplate/InterfaceBp.php';
require_once './classes/boilerplate/Boilerplate.php';

/*version anterior
    //bloque genesis clases principales y funciones
    #agrega true al segundo parametro ($stop) para ejecutar las funciones del index
    //hide block | off block
    #bpblock(true,false);
    //(section_04)
    $xyz = (isset($_GET['do']) ? (int)$_GET['do'] : null);

    if ($xyz === 1) {
        bio();
    } else if ($xyz === 2) {
        hide();
    } else if ($xyz === 3) {
        off();
    } else {

*/

    $words = explode('/',$_SERVER['REQUEST_URI']);
    $words = array_filter($words);

    if (count($words) === 0 || empty($words)) {

        api_2();

    } else if (count($words) >= 1) {

        switch($words[1]) {

            case 'api': echo json_encode([
                'punto_de_conexion_code_level' => 'port_01'
            ]); break;

            case 'boilerplate': boilerplate(); break;

            case 'files': files(); break;

            case 'attrsList': 
                    $gobj = new Galleta;
                    echo $gobj->attrs_list();
                break;

            case 'todo': 
                    $form = new Boilerplate;
                    if (array_key_exists(2,$words)) {
                        if ($words[2] === 'run') {
                            echo TodoList::run('To-do List',[
                                #head tags
                            ],[
                                #body tags
                                $form->response('todo')
                            ]);
                        } else {
                            return;
                        }
                    }else {
                        echo json_encode([
                            'status' => 200,
                            'result' => 'to-do list program coming soon',
                            'project_status' => 'underconstruction',
                            'run_program' => 'http://mi.project/todo/run'
                        ],http_response_code(200));
                    }
                break;

            case 'cody': echo "Cody's space"; break;

            default: 
            switch ($words[1]) {

                case '1': echo "project 1"; break;

                case '2': echo "project 2"; break;

                case '3': echo "project 3"; break;

                case '4': echo "project 4"; break;

                case '5': echo "project 5"; break;

                case '6': echo "project 6"; break;

                case '7': echo "project 7"; break;

                case '8': echo "project 8"; break;

                case '9': echo "project 9"; break;

                case '10': echo "project 10"; break;

                case '11': echo "project 11"; break;

                case '12': echo "project 12"; break;

                case '13': echo "project 13"; break;

                case '14': echo "project 14"; break;

                case '15': echo "project 15"; break;

                case '16': echo "project 16"; break;

                case '17': echo "project 17"; break;

                case '18': echo "project 18"; break;

                case '19': echo "project 19"; break;

                case '20': echo "project 20"; break;

                case '21': echo "project 21"; break;

                case '22': echo "project 22"; break;

                case '23': echo "project 23"; break;

                case '24': echo "project 24"; break;

                case '25': echo "project 25"; break;

                case '26': echo "project 26"; break;

                case '27': echo "project 27"; break;

                case '28': echo "project 28"; break;

                case '29': echo "project 29"; break;

                case '30': echo "project 30"; break;

                case '31': echo "project 31"; break;

                case '32': echo "project 32"; break;

                case '33': echo "project 33"; break;

                case '34': echo "project 34"; break;

                case '35': echo "project 35"; break;

                case '36': echo "project 36"; break;

                case '37': echo "project 37"; break;

                case '38': echo "project 38"; break;

                case '39': echo "project 39"; break;

                case '40': echo "project 40"; break;

                case '41': echo "project 41"; break;

                case '42': echo "project 42"; break;

                case '43': echo "project 43"; break;

                case '44': echo "project 44"; break;

                case '45': echo "project 45"; break;

                case '46': echo "project 46"; break;

                case '47': echo "project 47"; break;

                case '48': echo "project 48"; break;

                case '49': echo "project 49"; break;

                case '50': echo "project 50"; break;

                default: echo json_encode([
                    'status' => 404,
                    'result' => 'not found page',
                    'this_page' => 'will be displayed when the user type an invalid url.'
                ],http_response_code(404));

            }

        }

    }

//}