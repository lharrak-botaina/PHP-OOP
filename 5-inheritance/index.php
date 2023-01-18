<?php 
class Bakery{
    public function my_method(){
        echo 'making coockies';
    }
   
}
class Coockies extends Bakery{
        public $name;
}

$coockies= new Coockies;
$coockies->my_method();
echo '<br>';
echo $coockies->name='sweet coockies';

?>