<?php
namespace Tomandyudezhi\PhpDesignPattern\AbstractFactory;

use Tomandyudezhi\PhpDesignPattern\AbstractFactory\ProductStockRuleInterface;
use Tomandyudezhi\PhpDesignPattern\AbstractFactory\ProductBaseRuleInterface;

class DrawProductRule implements ProductBaseRuleInterface,ProductStockRuleInterface
{
    public function getList() {
        return [
            ['name' => '抽奖奖品1','image'=>'图片1','srock'=>100],
            ['name' => '抽奖奖品2','image'=>'图片2','srock'=>100],
        ];
    }

    public function setStock() {
        return '修改抽奖模块礼品库存';
    }

    public function updateInfo() {
        return '修改抽奖模块礼品信息';
    }
}