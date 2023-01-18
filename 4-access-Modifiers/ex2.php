<?php 

//Access modifiers  = Private, Public , Protected
class User{
    private $name;
    public function sayHello(){
        return 'hello';
    }
    public function set_name($Name){
        $this->name=$Name;
    }
    public function get_name(){
      return  $this->name;
    }
}
$user = new User();
$user->set_name('boutaina');
echo $user->get_name();//error
echo $user->sayHello();//ok 

 ?>