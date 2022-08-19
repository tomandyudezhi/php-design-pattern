<?php
namespace Tomandyudezhi\PhpDesignPattern\AbstractFactory;

use Tomandyudezhi\PhpDesignPattern\AbstractFactory\ProductStockRuleInterface;
use Tomandyudezhi\PhpDesignPattern\AbstractFactory\ProductBaseRuleInterface;

class BuyProductRule implements ProductBaseRuleInterface,ProductStockRuleInterface
{
    public function getList() {
        return [
            ['name' => '抢购礼品1','image'=>'图片1','srock'=>100],
            ['name' => '抢购礼品2','image'=>'图片2','srock'=>100],
        ];
    }

    public function setStock() {
        return '修改抢购模块礼品库存';
    }

    public function updateInfo() {
        return '修改抢购模块礼品信息';
    }
}