<?php 

class Person {
    public $name;
    function __construct($Name)
    {
         $this->name=$Name;
    }
}
class Student extends Person{
   function info(){
    echo 'student';
   }
}

$student =new Student('boutaina');
echo $student->name;
echo '<br>';
$student->info();

?>