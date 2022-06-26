<?php

    Class DB{
        private static $conexao;

        public function getInstance() {    
            if(!isset(self::$conexao)) {
              
                try {
                    self::$conexao = new PDO("mysql:host=localhost; dbname=porigym","phpmyadmin","lipe2111");
                    self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            return self::$conexao;
        }

        public function prepare($sql){
            return self::getInstance()->prepare($sql);
        }
    }