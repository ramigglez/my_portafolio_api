<?php

$json = array(
    'status' => 200,
    'className' => 'Boilerplate',
    'statusClass' => 'active',
    'MainPrototype' => "create_element (\$tag,\$content,\$attrs = [],\$type = 'Default',\$z = '?')",
    'result' => 'Todo Bien !',
    'methods' => [
        'item_01' => [
            'method_identifier' => 'create_attrs(parametros)',
            'parametros' => [
                'int $type = 0',
                'array $attrs'
            ],
            'visivility' => 'private'
        ],
        'item_02' => [
            'method_identifier' => 'create_content(parametros)',
            'parametros' => [
                'null|array|string $content = null'
            ],
            'visivility' => 'private'
        ],
        'item_03' => [
            'method_identifier' => 'create_element(parametros)',
            'parametros' => [
                'string|null $tag = null',
                'null|array|string $content = null',
                'null|array|string $attrs = null',
                'null|string $type',
                '$z'
            ],
            'visivility' => 'public'
        ],
        'item_04' => [
            'method_identifier' => 'validar_hash (parametros)',
            'parametros' => [
                '$info_json',
                '$output = 1'
            ],
            'visivility' => 'private'
        ]
    ],
    'clases_relacionadas' => [
        'name' => 'Bp',
        'static_methods' => [
            "tg(\$tag,\$content,\$attrs = [],\$type = 'Default',\$z = '/') ",
            'info()'
        ]
    ],
    'functions_derivadas' => [
        'bpblock (bool $hide,$stop = false)',
        'doct()',
        'off ()',
        'bio ()',
        'hide ()'
    ],
    'constantes_importantes' => [
        'CEROS_INT',
        'CEROS_STR'
    ],
    'nonce' => 0 
);