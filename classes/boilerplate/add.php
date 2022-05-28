<?php
//Mostrar Errores (section_01)
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log','/var/www/mi.project/portafolio/php_error_log');

    //Ceros inicales para que un hash sea valido
    #si la cantidad de ceros int aumenta , el string debe de coincidir en longitud tambien (section_02)
    $ceros = (isset($_GET['cs']) ? (int)$_GET['cs'] : (int)2);
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
                    require_once './classes/galleta/Galleta.php';
                    $gobj = new Galleta;
                    echo $gobj->attrs_list();
                break;

            default: echo json_encode([
                'status' => 404,
                'result' => 'not found page',
                'html_code' => [
                    '/**
                     * This section is my portafolio html perse.
                     * NOTE : each item of this array could be a completed project.
                     */'
                ],
                'this_page' => 'will be displayed when the user type an invalid url.'
            ],http_response_code(404));

        }

    }

//}