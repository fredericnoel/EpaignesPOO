<?php

date_default_timezone_set('Europe/Paris');
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$merlin = new Magicien("Macron");

$merlin->unnomdemethodealacon();


var_dump($merlin);