<?php

require_once "../src/Entity/Abstract/AbstractVertebre.php";
require_once "../src/Interface/InterfaceAnimal.php";

class Singe extends Vertebre implements Animal{
  public function seDeplacer() {
    echo "Le singe se déplace en sautant et en marchant.\n";
  }

  public function seNourrir() {
    echo "Le singe se nourrit de fruits et de noix.\n";
  }
}