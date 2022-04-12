<?php

// Description d'un article
class Article {
  private int $refArticle;
  private Taille $tailleChoisie;
  private string $couleurChoisie;
  // Chemin URL à ajouter pour avoir l'URL de la photo
  //private const URL =__DIR__.'/../data/img/';

  function __construct(int $refArticle=0, Taille $tailleChoisie='', string $couleurChoisie='') {
    $this->refArticle = $refArticle;
    $this->tailleChoisie = $tailleChoisie;
    $this->couleurChoisie = $couleurChoisie;
  }

  function __get($name) {
    if ($name == 'photo'){//avant attribut on met pas le $$$$$
      return self::URL.$this->$name;
      //return l'URL concaténée avec "." la fin de l'url de l'image ex URL."1.JPG"
    }
    else {
      return $this->$name;
    }
  }


}

?>
