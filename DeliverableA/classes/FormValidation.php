<?php
class FormValidation
{
    public $valid = true;
    private $_errorFields = [];

    public function checkEmpty($fieldName)
    {
        $message = "";

        if(!isset($_POST[$fieldName]) || empty($_POST[$fieldName]))
        {
            $this->_errorFields[] = $fieldName;

            $this->valid = false;

            $message = "please supply a value";
        }

        return $message;
    }
	
    public function checkEmail($fieldName)
    {
        $message = "";

        if(!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL))
        {
            $this->_errorFields[] = $fieldName;

            $this->valid = false;
            $message = "Please enter a valid email";
        }
        return $message;
    }

    public function checkName($fieldName)
    {
        $message = "";

        if(isset($_POST[$fieldName]) && !empty($_POST[$fieldName]))
        {
            if(!preg_match("/^[a-zA-Z \-']*$/",$_POST[$fieldName]))
            {
                $this->_errorFields[] = $fieldName;

                $this->valid = false;

                $message = "Only letters, apostrophe, hyphens and white space allowed"; 


            }
        }
        return $message;
    }

    public function setErrorClass($fieldName)
    {
        if(in_array($fieldName,$this->_errorFields))
        {
            return 'class = "error"';
        }
    }

    public function setValue($fieldName)
    {
        if(isset($_POST[$fieldName]))
        {
            return htmlentities($_POST[$fieldName]);
        }
    }

    public function setSelected($fieldName,$fieldValue)
    {
        if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
        {
            return "selected";
        }
    }

    public function setChecked($fieldName,$fieldValue)
    {
        if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
        {
            return "checked";
        }
    }

    public function checkDigits($fieldName)
    {
        $message = "";

        if(isset($_POST[$fieldName]) && !empty($_POST[$fieldName]))
        {
            if(!preg_match("/^[0-9]*$/",$_POST[$fieldName]))
            {
                $this->_errorFields[] = $fieldName;

                $this->valid = false;

                $message = "Only digits 0-9 allowed"; 


            }
        }
        return $message;
    }
}
?>