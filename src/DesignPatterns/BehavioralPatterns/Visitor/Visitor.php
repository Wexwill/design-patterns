<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Visitor;

/**
 * Интерфейс Посетителя объявляет набор методов посещения, соответствующих
 * классам компонентов. Сигнатура метода посещения позволяет посетителю
 * определить конкретный класс компонента, с которым он имеет дело.
 */
interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}