<?php 
class Fruit{
    public $name;
    public $color;

    public function __construct($Name,$Color)
    {
        $this->name=$Name;
        $this->color=$Color;
    }
    protected function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}";
    }

    public function get_intro(){
        return $this->intro();
    }

    

}
class Strawberry extends Fruit{
        public function message(){
            echo "Am i a fruit or a berry?";
        }
}


// class Salad extends Strawberry {

// }

// $strawberry =new Strawberry('strawberry','red');
// $strawberry->message();
// echo "<br>";
// $strawberry->intro();


// $strawberry =new Salad('banana','yellow');
// $strawberry->message();
// echo "<br>";
// $strawberry->get_intro();
?>