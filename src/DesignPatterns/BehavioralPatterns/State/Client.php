<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\State;

class Client
{
    public function clientCode(): void
    {
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
    }
}