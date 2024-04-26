<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Visitor;

use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\Visitor;

class ConcreteVisitor2 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor2<br />";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo $element->specialMethodOfConcreteComponentB() . " + ConcreteVisitor2<br />";
    }
}