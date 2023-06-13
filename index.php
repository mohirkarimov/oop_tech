<?php


////////////// NAMESPACES  //////////////////

require 'classes/dog.php';

$bingo  = new Dog();

var_dump($bingo);



















////////////////////////////////    ////////////////////////////////////////    //////////////////////////////////

/*

/// Constants ----------------------


class Dog
{
    public $name;
    public static   $weight = '25 kg';

    const BREED = 'Doberman';

    public function bark()
    {
        return self::BREED;
    }

    public static function eat()
    {
        return 'eating';
    }
}

echo Dog::BREED;






*/











////////////////////////////////////////////////////////////////////////
/*

// Static Methods & Property
// static


class Dog
{
    public $name;
    public static   $weight = '25 kg';
    public function bark()
    {
        return 'wow wow wow';
    }

    public static function eat()
    {
        return 'eating';
    }
}


//$bingo = new Dog();
//$bingo->name = 'Bingo';
//echo $bingo->bark() ;



echo Dog::$weight;




*/





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*

// TRAITS bitta funksiyani bir nechta class da ishlatish   

trait AnimalTrait{
    public function eat(){
        return 'eating meat ' ;
    }
}



interface Animal
{

    public function makeSound();
}


class Dog implements Animal {

    use AnimalTrait;
    public function makeSound(){
        return 'wow wow wow' ;
    }
    
}




$dog = new Dog;


var_dump($dog->eat());

*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/*
// Interfaces

interface Animal
{

    public function makeSound();
    public function eat();
}


class Dog implements Animal {
    public function makeSound(){
        return 'wow wow wow' ;
    }
    public function eat(){
        return 'eating meat ' ;
    }

}



*/







////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/*

Abstract classes 


abstract class Car {
    // Properties , arttributes

    public $model;
    protected $year;
     private $km;

    public function __construct($model, $year , $km) {
    
        $this->model = $model; 
        $this->year = $year;
        $this->km = $km;
    
    }


    // methods


    abstract public function stop(); // tanasi bolmidi class berilgan bosa child gayam yozib qoyishimiz kere

    /// methods

    function drive(){
        return 'driving'; 

    }

    public function getYear(){
        return $this->year;
    }
   
    protected function reverse () {

        return 'reverse drive';
    }

    private function sell(){
        return 'selling'; 
    }

}

class ElectricCar extends   Car {
     public function stop(){
        return 'stop'; 
     }
}

$Lucid = new ElectricCar('Lucid' , 2022 , 322222);

var_dump($Lucid);



*/


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/*
Access Modifier - korinishni modification qilish 

3 xil korinish bor

public

private

protected  - class ni ichida ishlatish mumkin faqat ushanda huquq bor

*/

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/*
inheritance - meros qilish
 extend - kalit inheritance ni
 parent - child
overriding  - ustidan yozvorish boshidan yozish
 Final - bundan boshqa clas kelib chqish mumkin mas dgani oxirgisi

*/



/*

class Car {
    // Properties , arttributes

    public $model;
    protected $year;
     private $km;

    public function __construct($model, $year , $km) {
    
        $this->model = $model; 
        $this->year = $year;
        $this->km = $km;
    
    }

    /// methods

    function drive(){
        return 'driving'; 

    }

    public function getYear(){
        return $this->year;
    }
   
    protected function reverse () {

        return 'reverse drive';
    }

    private function sell(){
        return 'selling'; 
    }

}

*/

/*
class ElectricCar extends Car
{

    public $km; 
    public function getYear(){
        return $this->year;
    } 


    public function getReverse(){
       return  $this->reverse();







    }



    
    public function getKm(){
        return $this->km;
    }
}


$chevy = new Car('chevrolet' , 2020 , 140000 );
$tesla = new ElectricCar('tesla' , 2023 , 5000);
$tesla->km = 8000;
echo $tesla->getReverse();

*/


//////////////////////////////////////////////////////////////////////////////////////////////