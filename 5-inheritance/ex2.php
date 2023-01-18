<?php 
class Fruit{
    public $name;
    public $color;

    public function __construct($Name,$Color)
    {
        $this->name=$Name;
        $this->color=$Color;
    }
    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}";
    }

    

}
class Strawberry extends Fruit{
        
}
?>