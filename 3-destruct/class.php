<?php 
class Student{
    public $firstName;
    public $lastName;

    
    function __construct($firstname)
    {
        $this->firstName=$firstname;
        
        
    }
    function __destruct()
    {
        echo "the firstName is {$this->firstName}";
    }


   
}

$student = new Student("boutaina");

?>