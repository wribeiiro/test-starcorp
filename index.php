<?php 

spl_autoload_extensions(".php");
spl_autoload_register();

use source\Starcorp;

$numbers = new Starcorp();

$numbers->getResultNumbers();