<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

/**
 * Интерфейс Обработчика объявляет метод построения цепочки обработчиков. Он
 * также объявляет метод для выполнения запроса.
 */

interface Handler
{
    /**
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler;

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string;
}