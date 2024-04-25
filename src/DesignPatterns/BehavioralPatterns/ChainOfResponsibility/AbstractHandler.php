<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\Handler;

/**
 * Поведение цепочки по умолчанию может быть реализовано внутри базового класса обработчика.
 */
class AbstractHandler implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    /**
     * @param \PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\Handler $handler
     * @return \PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\Handler
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        // Возврат обработчика отсюда позволит связать обработчики простым
        // способом, вот так:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        return $this->nextHandler?->handle($request);

    }
}