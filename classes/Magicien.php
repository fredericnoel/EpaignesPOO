<?php

final class Magicien extends Personnage
{
    const TRUC = 42;

    public $magie;

    public function __construct(string $name)
    {
        $this->nom = $name;
    }

    public function __call($name, $arguments)
    {
        Log::logWrite("La methode " . $name . "n'existe pas");
    }

    public function truc()
    {
        return self::TRUC;
    }

    public function __destruct()
    {
        echo "Objet detruit";
    }
}
