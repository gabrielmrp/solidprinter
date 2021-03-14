<?php
class Printer{
private $current;
private $objects;
private $result;
private $print_information;

public function __construct($objects,$i) {
      $this->current = $i;
      $this->objects = $objects ;
   } 
 
public function filter_object_related()
{
    return  
      array_filter($this->result,
      'is_string'  
      );
}

public function merge_object_related($text)
{
    return array_merge(
      $this->result,
      [$text]);
}

public function group_verbose()
{
  return  
  implode('And',$this->result ) ;
}
 
public function decide_print_information(){

  #default print information is the current number in decimals
  $this->result = [$this->current]; 
   
  foreach($this->objects as $object)
    { 
      
      if($this->current % $object->number == 0)
      {

        #if one object's number is multiple of current one, remove numeric information
        $this->result = $this->filter_object_related();

        #merge previous verbose elements with new object verbose information
        $this->result = $this->merge_object_related($object->get_verbose());

      }

    } 
  
  
  #group with an "And" if it's multiple of more than one object's number

  $this->print_information = $this->group_verbose();  
   
  }


public function print()
{

  $this->decide_print_information();
  echo $this->print_information;
  echo "<br />";
}
 
}