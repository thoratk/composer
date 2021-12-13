<?php
use App\Wcs\Hello;
require __DIR__ . '/../vendor/autoload.php';

$hello=new Hello;
echo $hello->talk();
