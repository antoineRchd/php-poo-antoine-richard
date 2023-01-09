<?php

require_once "../src/Controller/SingeController.php";
use PHPUnit\Framework\TestCase;

class SingeTest extends TestCase {
  public function testSeNourrir() {
    $singe = new Singe("Bobo", ["noir", "blanc"]);
    $result = $singe->seNourrir();
    $this->assertEquals("Le singe se nourrit de fruits et de noix.\n", $result);
  }
}