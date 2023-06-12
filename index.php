<?php 


class Car {
    // Properties , arttributes

    public $model;
    public $year;

    public function __construct($model, $year) {
    
        $this->model = $model; 
        $this->year = $year;
    
    }




    /// methods

    function drive(){
        return 'driving'; 

    }

    public function getFuel(){
        return 'fueling';
    }

    public function setModel($model){
         $this->model = $model;
    }


}

$bmw = new Car('bmw', '2014');

$audi = new Car('audi', 'dodge');

var_dump($audi);