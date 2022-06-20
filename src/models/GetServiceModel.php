<?php

    require_once './src/models/Connect.php';

    class GetServiceModel {

        public static function getDataBaseRegisters ($table) {

            $sql = "SELECT * FROM ".Connect::getCredentials()['db'].".".$table;

            $statement = new Connect;

            $connection = $statement->getConnection();

            $data = $connection->prepare($sql);

            $data->execute();

            return $data->fetchAll(PDO::FETCH_CLASS);

        }

    }

?>