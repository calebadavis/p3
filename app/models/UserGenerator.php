<?php

// A user generation class.
// Creates user objects with names, and optionally birthdays and/or blurbs
// Relies on the 'FakeUser' class (see FakeUser.php)
class UserGenerator {

  private $faker;

  function __construct() {
    $this->faker = Faker\Factory::create();
  }

  // Generate a set of new user objects
  // numUsers is the number of users to generate
  // withBirthdate is a bool indicating inclusion of a fake birthdate
  // withBlurb is a bool indicating inclusion of a lorem-style blurb/epitath 
  public function generate($numUsers, $withBirthdate, $withBlurb) {

    $ret = array();

    while ($numUsers--) {

      $attributes = array();
      
      if ($withBirthdate) 
        $attributes['birthdate'] = $this->faker->date;

      if ($withBlurb) 
        $attributes['blurb'] = $this->faker->paragraph;

      $newUser = new FakeUser($this->faker->name, $attributes);

      $ret[$newUser->getName()] = $newUser;

    }

    return $ret;
  }

}
?>