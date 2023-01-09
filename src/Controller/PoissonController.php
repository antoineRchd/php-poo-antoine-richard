<?php

require_once "../src/Entity/Abstract/AbstractVertebre.php";
require_once "../src/Interface/InterfaceAnimal.php";

final class Poisson extends Vertebre implements Animal{
  public function seDeplacer() {
    echo "Le poisson se déplace en nageant.\n";
  }

  public function seNourrir() {
    echo "Le poisson se nourrit de plancton et de petits poissons.\n";
  }
}