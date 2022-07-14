<?php

class Human{
    private $gender;
    public function setName($gender){
    $this->gender = $gender;
    }
    public function getName(){
    return 'Gender : = '. $this->gender;
    }
}

$Human = new Human();
$Human->setName('Male');
$gender = $Human->getName();
echo $gender;


class student extends Human {
    private $name;
  public function setName($name){
     $this->name = $name;
  }
  public function getName(){
     return 'welocme'. $this->name;
  }
}

$student = new student();


?>