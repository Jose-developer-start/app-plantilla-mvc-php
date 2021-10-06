<?php

    class Database{
        private $host;
        private $user;
        private $passwd;
        private $db;

        public function __construct()
        {
            $this->host = constant('HOST');
            $this->user = constant('USER');
            $this->passwd = constant('PASSWD');
            $this->db = constant('DB');
        }
        public function connect(){
            try{
                $config = "mysql:host=" . $this->host . ";dbname=" . $this->db;
                $pdo = new PDO($config, $this->user, $this->passwd);
                return $pdo;
            }catch(PDOException $err){
                die("Error en: ".$err->getMessage());
            }
        }
    }