<?php
class User
{
  public $name;
  public $email;
  public $cdc;
  public $validCdc;
  public $userRegist;
  public $cart = [];

  function __construct($_name, $_email, $_cdc, $_validCdc, $_userRegist)
  {
    $this->name = $_name;
    $this->email = $_email;
    $this->cdc = $_cdc;
    $this->validCdc = $_validCdc;
    $this->userRegist = $_userRegist;
  }

  // Funzione che aggiunge un prodotto al carrello
  public function addToCart($_product)
  {
    if (get_parent_class($_product) === "Product") {
      $this->cart[] = $_product;
    } else {
      throw new Exception("Stai aggiungendo al carrello qualcosa che non è un prodotto.");
    }
  }

  // Funzione che calcola il prezzo totale (in base al numero di items nel carrello e in base alla registrazione utente)
  public function getTotalPrice()
  {
    $total_price = 0;
    if ($this->userRegist === true) {
      foreach ($this->cart as $item) {
        $total_price += $item->price;
      }
      return $total_price - ($total_price * 0.2);
    } else {
      return $total_price;
    }
  }

  // Funzione che verifica se la CDC sia valida o meno e stampa il risultato
  public function checkCDC()
  {
    if ($this->validCdc) {
      return "Ordine completato con successo. <br>
      Verifica ordine <a href='#'>qui</a>";
    } else {
      return "Poraccio fatte na VISA e getta sta tesserina demm**rda.";
    }
  }
}
