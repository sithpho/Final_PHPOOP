<?php 
include 'src/function.php';

if(isset($_POST['submit'])){
    
    $numOne= $_POST['firstnumber'];
    $numTwo = $_POST['secondnumber'];
    $operator = $_POST[''];
   
    if($operator == "add"){
        $cal = new Calculation;
        $cal->add($numOne, $numTwo);
    }
   
 
}