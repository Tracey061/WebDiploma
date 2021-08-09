
<?php
class Car
{
    public $colour;
    public $fuelVolume;
    private $_speed = 0;

    public function accelerate($kilometers)
    {
        if($this->_speed >= 100)
        {
            return false;
        }
        else
        {
            $this->_speed += $kilometers;
            return true;
        }
    }

    public function brake($kilometers)
    {
        if($this->_speed <= 0)
        {
            return false;
        }
        
        $this->_speed -= $kilometers;
        return true;
    }

    public function getSpeed()
    {
        return $this->_speed;
    }
}


?>