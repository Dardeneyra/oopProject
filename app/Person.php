<?php

namespace App;

 class Person implements info
{
    protected $name;
    protected $age;

    public static $counter = 0;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        self::$counter++;
    }
    public static function getCounter()
    {
        return self::$counter;
    }

     public function introduce()
     {
         return 'Привет! мeня зовут ' . $this->name;
     }
 }