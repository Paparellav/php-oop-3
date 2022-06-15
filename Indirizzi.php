<?php

trait Indirizzi {
  public $via;
  public $civico;
  public $cap;
  public $città;
  public $stato;

  public function setCompleteAdress($_via, $_civico, $_cap, $_città, $_stato) {
    $this->via = $_via;
    $this->civico = $_civico;
    $this->cap = $_cap;
    $this->città = $_città;
    $this->stato = $_stato;
  }

  public function printAdress() {
    return "$this->via, $this->civico <br> $this->cap <br> $this->città(MI) <br> $this->stato";
  }
}