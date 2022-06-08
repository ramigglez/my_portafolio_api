<?php
    //section 01
    class Boilerplate implements jsonResp {

        public function validar_hash ($info_json,$output = 1) {

            $path = [];

            $nonce = 0;

            $info_json['nonce'] = $nonce;

            do {
                $a = json_encode($info_json);
                $hashTest = hash('sha256',$a);
                array_push($path,$hashTest);
                $aux = substr($hashTest,0,CEROS_INT);
                $nonce++;
                $info_json['nonce'] = $nonce;
            } while ($aux !== CEROS_STR);

            $hash = $hashTest;

            if ($output === 0) {
                return $hash;
            } else if ($output === -1) {
                array_pop($path);
                return $path;
            } else {
                return $info_json;
            }

        }

        #Controller Multi-responses (differents data types)
        public function response (null|string|array|int|float|bool $x = 'info') {


            if ($x === 'info') {

                require_once './classes/boilerplate/class_information.php';

                $a = json_encode($json);
                $previous_hash = hash('sha256',$a);

                require_once './classes/boilerplate/block_information.php';

                return json_encode($block,http_response_code($json['status']));

            } else {

                require_once './classes/boilerplate/get_response.php';

                return json_encode($json,http_response_code($json['status']));

            }
                

        }

        private function create_attrs (string|array $attrs = [], null|string $type = 'Default') {

            $key_value_string = '';

            if ($type === 'One') {

                foreach ($attrs as $key => $value) {
                    $key_value_string .= " " . $key . "='" . $value . "'";
                }

            } else if ($type === 'Two') {

                if (array_key_exists('@',$attrs) && array_key_exists('#',$attrs)) {

                    foreach ($attrs['@'] as $key => $value) {
                        $key_value_string .= " ".$key."='".$value."'";
                    }

                    for ($i = 0; $i < count($attrs['#']); $i++) {
                        $key_value_string .= " ".$attrs['#'][$i];
                    }

                }

            } else {

                for ($i = 0; $i < count($attrs); $i++) {
                    $key_value_string .= " " . $attrs[$i];
                }

            }

            return $key_value_string;

        }

        private function create_content (null|array|string $content) {

            $data = null;

            if (is_array($content)) {

                for ($i = 0; $i < count($content); $i++) {

                    if (is_array($content[$i])) {

                        $data .= $this->create_content($content[$i]);

                    } else {

                        $data .= $content[$i];

                    }
                }

            }else{

                $data = $content;

            }

            return $data;
        }

        public function create_element ($tag,$content,$attrs = [],$type = 'Default',$z = '?') {

            switch ($z) {
                case '/':return "<$tag{$this->create_attrs($attrs,$type)}>{$this->create_content($content)}</$tag>";break;
                case '!':return "<$tag{$this->create_attrs($attrs,$type)}>";break;
                case '@':return "<$tag{$this->create_attrs($attrs,$type)}/>";break;
                default: return "options : '/ , ! , @'";
            }

        }

    }
    //section 02
    class Bp {

        public static function tg ($tag,$content,$attrs = [],$type = 'Default',$z = '/') {
            $obj = new Boilerplate;
            return $obj->create_element($tag,$content,$attrs,$type,$z);
        }

        public static function info ($get = false) {
            if($get) {
                return (new Boilerplate)->response(null);
            }else {
                echo (new Boilerplate)->response();
            }
        }

    }
    //section 03
    function bpblock (bool $hide,$stop = false) {
        if ($stop) {
            return;
        }else {
            if ($hide) {
                echo Bp::info(true);
            } else {
                Bp::info();
            }
        }
    }

    function api_2 (/*$default = false*/) {
        bpblock(true,true);
        echo json_encode([
            'punto_de_conexion_code_level' => 'port_02',
            'function' => 'api_2()',
            'this_function' => 'will be executed when the uri have not parameters.',
            'actual_endpoints' => [
                'the_core_class_documentation' => 'http://mi.project/boilerplate',
                'the_file_structure_documentation' => 'http://mi.project/files',
                'the_attributes_list_for_the_form_html' => 'http://mi.project/attrsList',
                'the_to_do_list_program' => 'http://mi.project/todo',
                'cody_web_site' => 'http://mi.project/cody',
                'the_404_error_code_page' => 'http://miproject/x',
                'the_default_index_page' => 'http://mi.project'
            ]
        ]);
    }

    function boilerplate () {
        bpblock(false,false);
    }

    function files () {
        bpblock(true,false);
    }

    function doct () {
        return Bp::tg('!DOCTYPE',[],['html'],'Default','!');
    }

?>