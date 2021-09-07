<?php

    class product{
        private $name;
        private $price;

        public function __construct($name, $price){

            $this->name = $name;
            $this->price = $price;
        }

        public function name(){
            return $this->name;
        }

        public function price(){
            return $this->price;
        }
    }

    $values = [
        new product('banana', 2.25),
        new product('apple', 1.25)
    ];