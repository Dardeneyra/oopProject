<?php

namespace App;
class Student extends Person implements info,Test
{
    use Education;

    public $university;
    public static $studentCounter = 0;

    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        self::$studentCounter++;
    }

    public static function getCounter() {
        return self::$studentCounter;
    }
    public function greet()
    {
    }

    public function getUniversity()
    {
        return $this->university;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function introduce()
    {
        return 'Привет! мне ' . $this->age . ' года';
    }

    public function introduce2()
    {
        // TODO: Implement introduce2() method.
    }
}