<?php

abstract class Personnage implements Combat
{
    protected $nom;
    protected $vie = 100;
    protected $attaque;
    protected $taille;
    protected $masse;
    protected $race;

    public function resultatCombat($a, $b)
    {
        return "$a a vaincu $b";
    }

    protected function marcher(): string
    {
        return "Je marche !";
    }

    protected function recupererPointDeVie(): int
    {
        return $this->vie;
    }
}
