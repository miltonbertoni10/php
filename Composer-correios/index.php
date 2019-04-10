<?php
use FlyingLuscas\Correios\Client;

require 'vendor/autoload.php';

$correios = new Client;

$correios->zipcode()
    ->find('33858-560');
