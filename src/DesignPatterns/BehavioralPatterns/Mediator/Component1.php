<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Mediator;

use PhpSite\DesignPatterns\BehavioralPatterns\Mediator\BaseComponent;

/**
 * Конкретные Компоненты реализуют различную функциональность. Они не зависят от
 * других компонентов. Они также не зависят от каких-либо конкретных классов
 * посредников.
 */
class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo "Component 1 does A.<br />";
        $this->mediator->notify($this, "A");
    }

    public function doB(): void
    {
        echo "Component 1 does B.<br />";
        $this->mediator->notify($this, "B");
    }
}