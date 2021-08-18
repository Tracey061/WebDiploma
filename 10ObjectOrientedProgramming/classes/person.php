<?php
class person
{
    private $_firstName;
    private $_lastName;
    private $_age;


    public function __construct($firstName,$lastName,$age)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_age = $age;
        // echo $this->_firstName;
        // echo $this->_lastName;
        // echo $this->_age;
    }

    public function showDetails()
    {
        return "$this->_firstName $this->_lastName, age $this->_age";
    }

}
?>