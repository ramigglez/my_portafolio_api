<?php

    class Filtro {

        public string $prefix = '';

        public function __construct ($ceros) {

            $this->prefix = str_repeat('0',$ceros);

        }

        public function getPreFix () {

            return json_encode ([
                'status' => 200,
                'prefix' => $this->prefix
            ],http_response_code(200));

        }

    }

?>