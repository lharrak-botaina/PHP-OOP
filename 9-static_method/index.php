<?php
// static methods can be called directly without creating an instance of the class .


class  Greeting{
    public static$my_static="hi";
    public static function welcome(){
        echo "Hello!!!";
        echo self::$my_static;
    }
    
    
}

class B extends Greeting{
    public  function hello(){
        return parent::$my_static;
    }
}
Greeting::welcome();
echo B::$my_static;