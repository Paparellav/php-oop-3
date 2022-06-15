<?php

trait Indirizzi {
  public $via;
  public $civico;
  public $città;
  public $cap;
  public $stato;

  public function setCompleteAdress($_via, $_civico, $_città, $_cap, $_stato) {
    $this->via = $_via;
    $this->civico = $_civico;
    $this->città = $_città;
    $this->cap = $_cap;
    $this->stato = $_stato;
  }
}