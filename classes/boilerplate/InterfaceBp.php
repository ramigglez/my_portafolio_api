<?php

interface jsonResp {

    public function response (null|string|array|int|float|bool $x = 'info');

    public function validar_hash ($info_json,$output = 1);

}