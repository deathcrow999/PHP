<?php


class person{


 var $name;
 
 public function __construct($personName){
  $this->name = $personName;
 }

 public function setName($newName){
  $this->name = $newName;
 }

 public function getName(){
  return $this->name;
 }

}




?>
