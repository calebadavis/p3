<?php

class FakeUser {

  // Private members

  private $name;
  private $birthdate;
  private $blurb;


  // Accessors

  // Name:
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }


  //Birthdate:
  public function getBirthdate() {
    return $this->birthdate;
  }

  public function setBirthdate($birthdate) {
    $this->birthdate = $birthdate;
  }

  //Blurb
  public function getBlurb() {
    return $this->blurb;
  }

  public function setBlurb($blurb) {
    $this->blurb = $blurb;
  }

  // Constructor
  // parameters: 
  //   name (string) - required
  //   attributes (array) - optional (only supports 'birthdate' and 'blurb')
  function __construct($name, $attributes) {
    $this->setName($name);
    if ($attributes) {
      $birthdate = $attributes['birthdate'];
      $blurb = $attributes['blurb'];
      if ($birthdate) $this->setBirthdate($birthdate);
      if ($blurb) $this->setBlurb($blurb);
    }
  }

}

?>