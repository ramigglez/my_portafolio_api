<?php

    class Connect {

        public static function getCredentials () {

            $credentials = [
                'db' => 'ramiwuas_api',
                'usr' => 'ramiwuas_me',
                'pwd' => 'Y7k59z73rs5UA39',
                'host' => 'localhost',
                'port' => '5522'
            ];

            return $credentials;

        }

        public function getConnection () {

            try {

                $conect = new PDO (

                    "mysql:host=".Connect::getCredentials()['host'].
                    ":".Connect::getCredentials()['port'].
                    "dbname=".Connect::getCredentials()['db'],
                    Connect::getCredentials()['usr'],
                    Connect::getCredentials()['pwd']

                );

                $conect->exec ('set names utf8');

            } catch (PDOException $e) {

                die ("Error: ".$e->getMessage());

            }

            return $conect;

        }

    }

?>