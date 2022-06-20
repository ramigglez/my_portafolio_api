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

        public function createHash ($data,$prefixLongitud = 3) {

            $nonce = 0;

            $temporal_information_json_format = [
                'nonce' => $nonce,
                'prefix' => $prefixLongitud
            ];

            do {

                $codificar_informacion = json_encode($temporal_information_json_format);

                $crear_hash = hash ('sha256',$codificar_informacion);

                $prefix_temporal = substr ($crear_hash,0,$temporal_information_json_format['prefix']);

                $nonce++;

                $temporal_information_json_format['nonce'] = $nonce;

            } while ($prefix_temporal !== $this->getPreFix());

            return json_encode ([
                'status' => 200,
                'hash' => $crear_hash
            ]);

        }

    }

?>