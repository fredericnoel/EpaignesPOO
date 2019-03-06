<?php

require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$merlin = new Magicien();

var_dump($merlin);