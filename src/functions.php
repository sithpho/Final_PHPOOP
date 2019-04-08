<?php  
include "cal.php";
    class Calculator{

        public $numOne;
        public $numTwo;
        public $result;
       
        public function __construct($numOne,$numTwo,$result){
            $this->numOne =  $numOne;
            $this->numTwo =  $numTwo;
            $this->result = $result;
        }

    
    function add($numOne,$numTwo,$result){
        return  $this->result=($firstnumb+$numTwo);
       }
    function div($numOne,$numTwo,$result){
        return  $this->result=($numOne/$numTwo);
       }

    function minus($numOne,$numTwo,$result){
        return  $this->result=($numOne-$numTwo);
       }

    function multiply($numOne,$numTwo,$result){
        return  $this->result=($numOne*$numTwo);
    }