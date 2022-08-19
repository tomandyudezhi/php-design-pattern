<?php
namespace Tomandyudezhi\PhpDesignPattern\AbstractFactory;

/**
 * ProductBaseRuleInterface
 *
 * 该接口不是抽象工厂设计模式的一部分, 一般情况下, 每个组件都是不相干的
 * 但在实际业务场景下，会有关联的地方，例如统一的获取列表、更改库存、更改礼品信息
 */
interface ProductBaseRuleInterface
{
    public function getList();

    public function updateInfo();
}