<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Visitor;

use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\Component;

class ConcreteComponentB implements Component
{
    /**
     * То же самое здесь: visitConcreteComponentB => ConcreteComponentB
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}