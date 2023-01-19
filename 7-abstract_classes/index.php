<?php
//superClass
 abstract class Car{
    public $name;
    public function __construct($Name)
    {
      $this->name=$Name;  
    }
    abstract public function intro():string;
}

//subClasses
class Audi extends Car{
     public function intro(): string {
        return "Choose german quality i'm an $this->name";
    }
}

class Volvo extends Car{
    public function intro():string{
        return "proud to be swedish i'm  a $this->name";
    }
}

// create objects from the child classes 
$audi = new  Audi("audi");
echo $audi->intro();
echo "<br>";

$volvo=new Volvo("Volvo");
echo $volvo->intro();