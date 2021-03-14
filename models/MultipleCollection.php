<?php
require 'models/Multiple.php' ;

class MultipleCollection {

   private $multiples; 
   public function __construct($array_multiples) {

    $this->multiples = [];

    foreach ($array_multiples as $multiple) 
    { 
          array_push($this->multiples,new Multiple((int)$multiple[0],$multiple[1])); 
    }

    $this->multiples = $this->remove_duplicated_entries();
           
   }

   public function remove_duplicated_entries()
    {
      return array_map('unserialize', array_unique(array_map('serialize', $this->multiples)));
    }  


   public function get_multiples()
   {
      return $this->multiples;
   }
 
}


 
