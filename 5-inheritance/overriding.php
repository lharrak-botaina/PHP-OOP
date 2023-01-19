<?php

use Fruit as GlobalFruit;

class Fruit{
    public $name;
    public $color;
    public function __construct($Name,$Color)
    {
        $this->name=$Name;
        $this->color=$Color;
    }
    public function intro(){
        echo "fruit :{$this->name},{$this->color}";
    }
}


class Strawberry extends Fruit{
    public $weight;
    public function __construct($Name,$Color,$Weight)
    {
        $this->name=$Name;
        $this->color=$Color;
        $this->weight=$Weight;

    }
    public function intro(){
        echo "Fruit :{$this->name},{$this->color},{$this->weight}";
    }

    
}
$strawberry=new Strawberry("blueberry","black","12g");
$strawberry->intro();

?>