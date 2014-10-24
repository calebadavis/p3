<?php
class UserGenerator {

  private $faker;

  function __construct() {
    $this->faker = Faker\Factory::create();
  }

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