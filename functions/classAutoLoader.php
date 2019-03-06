<?php

function classAutoLoader ($classeName)
{
    require_once "./classes/" . $classeName . ".php";
}