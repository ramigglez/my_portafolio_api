<?php

    $use = 1;

    /**
     * Errores LOG
     */

    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', '/var/www/mi.project/php_error_log');

    ###############

    require_once './src/url_reader_controller/MainViewController.php';
    require_once './src/url_reader_controller/EndpointsValidation.php';

    if ($use === 1) {

        $obj1 = new MainViewController;
        $obj1 -> getIndex();

    } else {

        getIndex ();

    }

?>