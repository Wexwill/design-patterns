<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Visitor;

/**
 * Интерфейс Компонента объявляет метод accept, который в качестве аргумента
 * может получать любой объект, реализующий интерфейс посетителя.
 */
interface Component
{
    public function accept(Visitor $visitor): void;
}