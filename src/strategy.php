<?php
    //define namespace
    namespace App;

    //define an interface for strategy
   interface ProductPrice {
       //function for calculate new price of veicle
        public function CalcPrice($price);
   }

   //carprice class calculate new price of car
   class CarPrice implements ProductPrice {
        public function CalcPrice($price) {
            //calc price of car
            return $price-5;
        } 
    }

    //motor price class calculate new price of motorcycle
    class MotorPrice implements ProductPrice {
        public function CalcPrice($price){
            
            return $price-10;
        }
    }
    
    //newprice calss give price as user price then process the price 
    class NewPrice {
        
        private $price;
 
        public function __construct($userprice) {
            $this->price = $userprice;
        }
     
        public function process(ProductPrice $userprice)
        {
            return $this->price = $userprice->CalcPrice($this->price);
        }
    }

    $newprice = new NewPrice(5000);


if(true) {
    /*veicle is motor */
    $newprice->process(new MotorPrice);  
}

if(false) { 
    /*veicle is car */
    $new->process(new CarPrice);
}
