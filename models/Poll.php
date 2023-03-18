<?php

    class Poll extends Model{

        public function __construct()
        {
            $this->table = "polls";
            parent::__construct();
        }

    }
