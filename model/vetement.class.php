<?php

// Description d'un vêtement
class Vetement {
  private string $refVetement;
  private string $intitule;
  private float $prix;
  //private Taille $taille; //--> requete SQL
  private Array $couleur;
  private Sexe $sexe;
  private Type $type;
  private bool $nouveaute;
  private string $photo;
  // Chemin URL à ajouter pour avoir l'URL de la photo
  private const URL =__DIR__.'/../data/img/';

  function __construct(string $refVetement='',string $intitule='',float $prix=0.00,/*Taille $taille='',*/Array $couleur='',Sexe $sexe='', Type $type='', bool $nouveaute='', string $photo='') {
    $this->refVetement = $refVetement;
    $this->intitule = $intitule;
    $this->prix = $prix;
    //$this->taille = $taille;
    $this->couleur = $couleur;
    $this->sexe = $sexe;
    $this->type = $type;
    $this->nouveaute = $nouveaute;
    $this->photo = $photo;
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
