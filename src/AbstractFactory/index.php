<?php
use Tomandyudezhi\PhpDesignPattern\AbstractFactory\BuyFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$buyFactory = new BuyFactory();
$buyProductRule = $buyFactory->createProductRule();
var_dump($buyProductRule->getList());
var_dump($buyProductRule->setStock());
var_dump($buyProductRule->updateInfo());
