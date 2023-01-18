<?php 
include 'class.php';

$apple=new Fruits();
$banana=new Fruits();
$banana -> set_name('banana');
$apple -> set_name('apple');

echo $apple->get_name();
echo '<br>';
echo $banana->get_name();


?>