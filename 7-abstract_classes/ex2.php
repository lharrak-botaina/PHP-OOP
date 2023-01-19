<?php
abstract class ParentClass{
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass{
    public function prefixName($name){
        if($name=="john doe"){
            $prefix="Mr.";
        }elseif($name=="jane doe"){
            $prefix="Mrs.";
        }
        return "{$prefix}{$name}";
    }
}

$class=new ChildClass();
echo $class->prefixName("john doe");
echo "<br>";
echo $class->prefixName("jane doe");