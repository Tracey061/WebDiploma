<?php
class Student
{
    public $firstName;
    public $lastName;
    public $course;
    public $units;
    private $_completed = 0;

    public function completeUnit($grade)
    {
        if($grade == "AC")
        {
            $this->_completed += 1;
        }

        if($this->units == $this->_completed)
        {
            return "Course complete";
        }
        return "Not course complete";

    }

    public function getCompletion()
    {
        $completion = $this->_completed / $this->units * 100;
        return $completion;

    }

}
?>