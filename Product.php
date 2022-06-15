<?php
class Product {
  public $name;
  public $description;
  public $price;

  function __construct($_name, $_description, $_price)
  {
    $this->name = $_name;
    $this->description = $_description;
    $this->price = $_price;
  }

  public function getSomeInfo() 
  {
    return "Nome prodotto: $this->name <br>
    Descrizione prodotto: $this->description <br>
    Prezzo prodotto: $this->price €";
  }
}
