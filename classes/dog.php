<?php 


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




