<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Mediator;

class Client
{
    /**
     * Клиентский код.
     *
     * @return void
     */
    public function clientCode(): void
    {
        $c1 = new Component1();
        $c2 = new Component2();
        $mediator = new ConcreteMediator($c1, $c2);

        echo "Client triggers operation A.<br/>";
        $c1->doA();

        echo "<br />";
        echo "Client triggers operation D.<br/>";
        $c2->doD();
    }
}