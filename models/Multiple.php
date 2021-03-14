<?php

 
class Multiple  {
  public $number;
  public $verbose;

  public function __construct($number,$verbose) {
      $this->number = $number;
      $this->verbose = $verbose;       
   } 

  public function get_verbose()
   {      
       return $this->verbose;
   }
 
}
 


 
