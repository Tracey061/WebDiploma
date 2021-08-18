<?php
class Athelete
{
    public $firstName;
    public $lastName;
    private $_speed;

    public function __construct($firstName,$lastName,$speed)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_speed = $speed;
    }


    public function walk()
    {
        $this->_speed = 6;
    }

    public function stop()
    {
        $this->_speed = 0;
    }

    public function run()
    {
        $this->_speed = 10;
    }

    public function getSpeed()
    {
        echo $this->_speed."<br>";
    }
}
?>