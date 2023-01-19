<?php 
class Goodbye{
    const MESSAGE=" Hello!!!!";
    const TITLE=" POO autoformation ";
}
echo Goodbye::MESSAGE;
echo Goodbye::TITLE;

class Greeting{
    const HELLO ="welecome";
    public function hello(){
    //we can access a constant from inside the class by using the self
       echo self::HELLO;
    }
}
$greeting=new Greeting();
$greeting->hello();

?>