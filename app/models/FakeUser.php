<?php

// A very simple user class, containing just 3 properties w/setters and getters
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
      $wantBirthdate = array_key_exists('birthdate', $attributes);
      $wantBlurb = array_key_exists('blurb', $attributes);
      if ($wantBirthdate)
        $birthdate = $attributes['birthdate'];
      if ($wantBlurb)
        $blurb = $attributes['blurb'];
      if ($wantBirthdate) $this->setBirthdate($birthdate);
      if ($wantBlurb) $this->setBlurb($blurb);
    }
  }

}

?>