<?php

class Galleta {

    public function attrs_list () {

        $json = [
            'status' => 200,
            'attrs_list' => [
                'attr_01' => [
                    'Attribute' => 'accept-charset',
                    'Value' => 'character_set',
                    'Description' => 'Specifies the character encodings
                    that are to be used for the form submission.'
                ],
                'attr_02' => [
                    'Attribute' => 'action',
                    'Value' => 'URL',
                    'Description' => 'Specifies where to send t
                    he form-data when a form is submitted'
                ],
                'attr_03' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_04' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_05' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_06' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_07' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_08' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ],
                'attr_09' => [
                    'Attribute' => '',
                    'Value' => '',
                    'Description' => ''
                ]
            ]
        ];

        return json_encode($json,http_response_code($json['status']));

    }

    public function crear_galleta ($args) {

        if ( 
            array_key_exists ( 'cookie_name', $args ) || 
            array_key_exists ( 'cookie_value', $args ) ||
            array_key_exists ( 'cookie_exp_date', $args ) 
            ) {
                setcookie(
                    $args['cookie_name'],
                    $args['cookie_value'],
                    $args['cookie_exp_date']
                );
        }

    }

    public function cookie_form ($items) {

        $type = $item['type'];

        $attrs = $item['attrs'];

    }

}