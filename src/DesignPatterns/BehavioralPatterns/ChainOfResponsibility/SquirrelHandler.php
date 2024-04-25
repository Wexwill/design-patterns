<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class SquirrelHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Squirrel: I'll eat the " . $request . ".<br />";
        } else {
            return parent::handle($request);
        }
    }
}