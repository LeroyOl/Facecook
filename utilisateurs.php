<?php

namespace facecook;

class utilisateur
{
    public $nom;
    public $email;
    public $mdp;
    public $id;

    public function getNom()
    {
        return $this->nom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
    public function __construct($nom, $email, $mdp)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->mdp = $mdp;
    }
   
     
}
