<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Command;

use PhpSite\DesignPatterns\BehavioralPatterns\Command\Command;

/**
 * Некоторые команды способны выполнять простые операции самостоятельно.
 */
class SimpleCommand implements Command
{

    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")<br />";
    }
}