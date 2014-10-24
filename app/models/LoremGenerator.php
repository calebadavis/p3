<?php
class LoremGenerator {

    private $loremGenerator;

    function __construct() {
      $this->loremGenerator = new Badcow\LoremIpsum\Generator();
    }

    public function generate($numParagraphs) {
      $paragraphs = $this->loremGenerator->getParagraphs($numParagraphs);
      return $paragraphs;
    }
}
?>