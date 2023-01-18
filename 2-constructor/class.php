<?php 
class Student{
    public $firstName;
    public $lastName;

    function __construct($firstname,$lastname)
    {
        $this->firstName=$firstname;
        $this->lastName=$lastname;
        
    }
    function get_firstName(){
        return $this->firstName;
    }
    function get_lastName(){
        return $this->lastName;
    }
}

?>