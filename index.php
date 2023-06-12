<?php 


class Car {
    // Properties , arttributes

    public $model;
    public $year;

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

$bmw = new Car();

$bmw->setModel('BMW-M322');
$bmw->year = '2019';


 echo $bmw->model; 























?>