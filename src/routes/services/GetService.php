<?php

    require_once 'src/url_reader_controller/GetServiceController.php';

    $table = $routesArray[1];

    $response = GetServiceController::getModelData ($table);

    $json = [
        'status' => 200,
        'result' => $response
    ];
    echo json_encode ($json,http_response_code($json['status']));

?>