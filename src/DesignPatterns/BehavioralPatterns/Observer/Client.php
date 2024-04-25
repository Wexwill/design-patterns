<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Observer;

class Client
{
    public function clientCode(): void
    {
        $subject = new Subject();

        $o1 = new ConcreteObserverA();
        $subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);

        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
    }
}