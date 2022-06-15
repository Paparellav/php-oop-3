<?php
require_once __DIR__ . "/Indirizzi.php";

class Agency
{
  public $name;
  public $adress;

  use Indirizzi;

  function __construct($_name, $_adress)
  {
    $this->name = $_name;
    $this->adress = $_adress;
    // Indirizzo sede legale
    $this->via = "Piazzale Giovanni delle Bande Nere";
    $this->civico = 9;
    $this->cap = 20146;
    $this->città = "Milano";
    $this->stato = "Italy";
  }
}
