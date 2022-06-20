<?php

    require_once 'src/models/GetServiceModel.php';

    class GetServiceController {

        public static function getModelData ($table) {

            $response = GetServiceModel::getDataBaseRegisters ($table);

            return $response;

        }

    }

?>