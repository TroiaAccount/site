<?php

    class User extends Model{
        
        public function __construct()
        {
            $this->table = "users";
            parent::__construct();
        }

    }

?>