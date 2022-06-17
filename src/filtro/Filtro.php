<?php

    class Filtro {

        public string $prefix = '';

        public function __construct ($ceros) {

            $this->prefix = str_repeat('0',$ceros);

        }

        public function getPreFix () {

            return $this->prefix;

        }

    }

?>