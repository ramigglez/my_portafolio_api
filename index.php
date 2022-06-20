<?php

    /**
     * Errores LOG
     */

    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', '/var/www/mi.project/php_error_log');

    ###############

    require_once './src/url_reader_controller/ApiServer.php';

    $obj = new ApiServer;
    $obj -> getIndex();

?>