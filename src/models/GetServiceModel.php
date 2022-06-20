<?php

    require_once './src/models/Connect.php';

    class GetServiceModel {

        public static function getDataBaseRegisters ($table) {

            $sql = "SELECT * FROM ".Connect::getCredentials()['db'].".".$table;

            $statement = new Connect;

            $connection = $statement->getConnection();

            $aux = $connection->prepare($sql);

            $aux->execute();

            return $aux->fetchAll(PDO::FETCH_CLASS);

        }

    }

?>