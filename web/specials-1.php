<?php

    class product{
        private $name;
        private $price;
        private $image;
        private $title;
        private $description;

        public function __construct($name,$title, $price, $image, $description){

            $this->name = $name;
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description;
        }

        public function name(){
            return $this->name;
        }

        public function title(){
            return $this->title;
        }

        public function price(){
            return $this->price;
        }

        public function image(){
            return $this->image;
        }

        
        public function description(){
            return $this->description;
        }
    }

    $values = [
        new product('V01','Cheese Vegitable','R45.00','D6','Brocolli, beans, and shredded cheese served in a crispy shell with your choice of sour cream and salsa accompanied by soup '),
        new product('V02','Mixed Vegitables','R55.00','Vg-1','broccoli, carrots, baby corn, water chestnuts, mushrooms, and green beans sauteed in brown sauce')
    ];
    //echo $values=[product=>('v02')];
  
  //echo $values[product('banana',2.25)];
  //echo $values->array