<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Command;

class Client
{
    /**
     * Клиентский код может параметризовать отправителя любыми командами.
     *
     * @return void
     */
    public function clientCode(): void
    {
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));

        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

        $invoker->doSomethingImportant();
    }
}