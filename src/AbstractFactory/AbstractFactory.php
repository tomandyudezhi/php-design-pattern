<?php
namespace Tomandyudezhi\PhpDesignPattern\AbstractFactory;

/**
 * 抽象工厂类
 *
 * 该设计模式实现了设计模式的依赖倒置原则，因为最终由具体子类创建具体组件
 *
 * 在本例中，抽象工厂为创建模块提供了接口，这里有两个模块：抽奖和抢购，有一种礼品处理逻辑，对应2个具体实现类。
 *
 * 尽管有四个具体类，但是客户端只需要知道这个接口可以用于构建正确的 HTTP 响应即可，无需关心其具体实现。
 */
abstract class AbstractFactory
{
    abstract public function createProductRule();
}