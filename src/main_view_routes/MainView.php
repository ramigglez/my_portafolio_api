<?php 

    $main_view = [

        'status' => 200,

        'result' => 'hello world.'

    ];

    function getMainView ($mv,$options) {

        if ($options) {

            echo json_encode ($mv,http_response_code($mv['status']));

        } else {

            return $mv;

        }

    }

?>