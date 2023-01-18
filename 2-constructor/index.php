<?php 
include 'class.php';

$student=new Student('boutaina','lharrak');
echo $student->get_firstName(); 
echo '<br>';
echo $student->get_lastName(); 

?>