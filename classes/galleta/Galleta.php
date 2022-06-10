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
                    'Attribute' => 'autocomplete',
                    'Value' => 'on/off',
                    'Description' => 'Specifies whether a form should have autocomplete on or off'
                ],
                'attr_04' => [
                    'Attribute' => 'enctype',
                    'Value' => 'application/x-www-form-urlencoded
                    multipart/form-data
                    text/plain',
                    'Description' => 'Specifies how the form-data should be encoded 
                    when submitting it to the server (only for method="post")'
                ],
                'attr_05' => [
                    'Attribute' => 'method',
                    'Value' => 'get || post',
                    'Description' => 'Specifies the HTTP method to use when sending form-data'
                ],
                'attr_06' => [
                    'Attribute' => 'name',
                    'Value' => 'text',
                    'Description' => 'Specifies the name of a form'
                ],
                'attr_07' => [
                    'Attribute' => 'rel',
                    'Value' => 'external
                    help
                    license
                    next
                    nofollow
                    noopener
                    noreferrer
                    opener
                    prev
                    search',
                    'Description' => 'Specifies the relationship between a linked resource and the current document'
                ],
                'attr_08' => [
                    'Attribute' => 'target',
                    'Value' => '_blank
                    _self
                    _parent
                    _top',
                    'Description' => 'Specifies where to display the response that is received after submitting the form'
                ],
                'global_and_event_attrs' => [
                    'global' => [

                    ],
                    'event' => [

                    ]
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

    public function cookie_form (array $items) {

        $type = $item['type'];

        $attrs = $item['attrs'];

    }

    public function create_form () {
        
    }

}