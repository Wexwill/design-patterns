<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

class DogHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".<br />";
        } else {
            return parent::handle($request);
        }
    }
}