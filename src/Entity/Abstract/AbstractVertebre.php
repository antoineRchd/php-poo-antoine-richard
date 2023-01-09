<?php

abstract class Vertebre {
  protected $nom;
  protected $couleurs;

  public function __construct($nom, $couleurs) {
    $this->nom = $nom;
    $this->couleurs = $couleurs;
  }

  abstract public function seDeplacer();

  public function seNourrir() {
    // Les vertébrés se nourrissent de différentes manières.
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getCouleurs() {
    return $this->couleurs;
  }

  public function setCouleurs($couleurs) {
    $this->couleurs = $couleurs;
  }
}