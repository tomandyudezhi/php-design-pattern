<?php
namespace Tomandyudezhi\PhpDesignPattern\AbstractFactory;

use Tomandyudezhi\PhpDesignPattern\AbstractFactory\AbstractFactory;
/**
 * 用于创建抽奖模块类
 * Class DrawFactory
 *
 * @package Tomandyudezhi\PhpDesignPattern\AbstractFactory
 */
class BuyFactory extends AbstractFactory
{
    public function createProductRule() {
        return new BuyProductRule();
    }
}