<?php 
//Access modifiers  = Private, Public , Protected
class User{
    private $name;
    public function sayHello(){
        return 'hello';
    }
}
$user = new User();
// $user->name='boutaina';//error
echo $user->sayHello();//ok 

 ?>