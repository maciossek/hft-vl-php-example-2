<?php

class Person {
  public $firstname;
  public $lastname;
  private $age;

  function __construct($firstname, $lastname, $age) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }
}
?>