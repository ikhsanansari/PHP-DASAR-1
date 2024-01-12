<?php

class Animal
{
    // Properties
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Getter methods
    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_cold_blooded()
    {
        return $this->cold_blooded;
    }
}
?>
