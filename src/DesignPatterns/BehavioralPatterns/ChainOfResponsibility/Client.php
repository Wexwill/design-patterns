<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\Handler;

class Client
{
    /**
     *  Обычно клиентский код приспособлен для работы с единственным обработчиком. В
     *  большинстве случаев клиенту даже неизвестно, что этот обработчик является
     *  частью цепочки.
     *
     * @param Handler $handler
     * @return void
     */
    public function clientCode(Handler $handler): void
    {
        foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
            echo "Client: Who wants a " . $food . "?<br />";
            $result = $handler->handle($food);
            if ($result) {
                echo "  " . $result;
            } else {
                echo "  " . $food . " was left untouched.<br />";
            }
        }
    }

}