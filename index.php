<?php

date_default_timezone_set('Europe/Paris');
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$merlin = new Magicien("Macron");

Log::logWrite("Coucou");

var_dump($merlin);