<?php

    class product{
        private $menu_id;
        private $price;
        private $image;
        private $title;
        private $description;

        public function __construct($name, $image, $title,$price, $description){

            $this->name = $name;
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description;
        }

        public function name(){
            return $this->name;
        }

        public function price(){
            return $this->price;
        }

        public function image(){
            return $this->image;
        }

        public function title(){
            return $this->title;
        }

        public function description(){
            return $this->description;
        }
    }

    $values = [
        new product('V01','Cheese Vegitable','D6', 'R45.00','Brocolli, beans, and shredded cheese served in a crispy shell with your choice of sour cream and salsa accompanied by soup '),
        new product('V02','Mixed Vegitables','Vg-1', 'R55.00','broccoli, carrots, baby corn, water chestnuts, mushrooms, and green beans sauteed in brown sauce')
    ];
    //echo $values=[product=>('v02')];
  
  //echo $values[product('banana',2.25)];
  //echo $values->array