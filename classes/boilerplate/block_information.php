<?php

$block = [
    'previous_hash' => [
        'GENESIS' => str_repeat('0',64)
    ],
    'hashes_between' => $this->validar_hash($json,-1),
    'hash_validado_que_inicia_con_xCeros' => $this->validar_hash($json,0),
    'data' => $this->validar_hash($json)
];