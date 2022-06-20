<?php

    class ApiServer {

        public function getIndex () {

            include 'src/routes/EndpointsValidation.php';

            $obj = new EndpointsValidation;

            $obj->uriRequest ($_SERVER['REQUEST_URI']);
    
        }

    }

?>