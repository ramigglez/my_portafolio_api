<?php 

    $use = 1;

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

                $router = new EndpointsValidation;
                $router -> uriRequest ($_SERVER['REQUEST_URI']);

            } else {

                return $mv;

            }

        }

    }

    if ($use === 1) {

        $obj = new MainView;
        $obj -> getMainView (['hello'=>'world'],true);

    } else {

        #run || execute the function
        getMainView (['hello'=>'world'],true);

    }

?>