<?php

    class EndpointsValidation {

        public function uriRequest ($server) {

            $routesArray = explode ('/', $server);

            $routesArray = array_filter ($routesArray);

            if (count($routesArray) == 0) {

                $response_404 = [
                    'status' => 404,
                    'result' => 'NotFound'
                ];

                echo json_encode ($response_404,http_response_code($response_404['status']));

                die();

            } else {

                if (isset($_SERVER['REQUEST_METHOD'])) {

                    switch ($_SERVER['REQUEST_METHOD']) {

                        case 'POST' : 
                            $json = [
                                'status' => 200,
                                'result' => 'solicitud POST'
                            ];
                            echo json_encode ($json,http_response_code($json['status']));    
                        break;
                        case 'PUT' : 
                            $json = [
                                'status' => 200,
                                'result' => 'solicitud PUT'
                            ];
                            echo json_encode ($json,http_response_code($json['status']));    
                        break;
                        case 'DELETE' : 
                            $json = [
                                'status' => 200,
                                'result' => 'solicitud DELETE'
                            ];
                            echo json_encode ($json,http_response_code($json['status']));    
                        break;
                        default: 
                        require_once './src/routes/services/GetService.php';

                    }

                } else {
                    return;
                }

            }

        }

    }

?>