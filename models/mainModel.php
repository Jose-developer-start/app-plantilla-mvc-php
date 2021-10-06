<?php

    class mainModel extends Model{
        public function __construct()
        {
            parent::__construct();
        }
        public function get(){
            $query = $this->db->connect()->prepare("SELECT * FROM users");
            $query->execute();
            return $query->fetch();
        }
    }

?>